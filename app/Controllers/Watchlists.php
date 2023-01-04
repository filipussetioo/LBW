<?php

namespace App\Controllers;
use App\Models\Watchlist;

class Watchlists extends BaseController
{   
    protected $model;

    public function __construct(){
        $this->model = new \App\Models\Watchlist();
    }
    public function index()
    {
        $readApiMovies = file_get_contents('https://api.themoviedb.org/3/movie/724495?api_key=4d039461c194e3b4f6c776c5cd99d7c1&language=en-US');

        $data = json_decode($readApiMovies,true);

        $apiSeries = file_get_contents('https://api.themoviedb.org/3/tv/popular?api_key=4d039461c194e3b4f6c776c5cd99d7c1&language=en-US&page=1');
        $dataSeries = json_decode($apiSeries,true);
        $dataMovies = json_decode($readApiMovies,true);


        $readApiSeries = file_get_contents('https://api.themoviedb.org/3/tv/popular?api_key=0c256b50796643e062ec0145360c47e9&language=en-US&page=1');
        $dataSeries = json_decode($readApiSeries,true);

        $username = session()->get('username');
        $db = \Config\Database::connect();
        $builder = $db->table('watchlist');
        $builder->select('watchlist_title, watchlistId, streaming_platform, username, backdrop_path');
        $builder->where('username',$username);

        $watchlist_data = $builder->get()->getResult();

        $builder_streaming = $db->table('watchlist');
        $builder_streaming->selectCount('streaming_platform')->select('streaming_platform')->groupBy('streaming_platform')->orderBy('streaming_platform','desc')->limit(2,0);
        $watchlist_streaming_data = $builder_streaming->get()->getResult();
            if($watchlist_streaming_data[0]->streaming_platform == 'null'){
                $watchlist_streaming_data = $watchlist_streaming_data[1];
            }
            else{
                $watchlist_streaming_data = $watchlist_streaming_data;
            };
        return view('watchlist.php',[
            'data' => $data,
            'dataMovies' => $dataMovies,
            'dataSeries' => $dataSeries,
            'watchlist_data' => $watchlist_data,
            'watchlist_streaming_data' => $watchlist_streaming_data
        ]); 
        
    }
}
