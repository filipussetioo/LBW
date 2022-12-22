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
        // $data_array = array(
        //     'datalist' => $data
        // );
        $username = session()->get('username');
        $db = \Config\Database::connect();
        $builder = $db->table('watchlist');
        $builder->select('watchlist_title, watchlistId, streaming_platform, username');
        $builder->where('username',$username);

        $watchlist_data = $builder->get()->getResult();
        // $watchlist_data = json_decode($watchlist_data);
        
        return view('watchlist.php',[
            'data' => $data,
            'dataMovies' => $dataMovies,
            'dataSeries' => $dataSeries,
            'watchlist_data' => $watchlist_data
        ]); 
        
    }
}
