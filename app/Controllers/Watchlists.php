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
        $db = \Config\Database::connect();
        $builder = $db->table('watchlist');
        $builder->select('watchlistId');

        $username = session()->get('username');
        $db = \Config\Database::connect();
        $builder = $db->table('watchlist');
        $builder->select('watchlist_title, watchlistId, streaming_platform, username, backdrop_path');
        $builder->where('username',$username);

        $watchlist_data = $builder->get()->getResult();

        //db function for checking ott
        $builder_streaming = $db->table('watchlist');
        $builder_streaming->selectCount('streaming_platform')->select('streaming_platform');
        $builder_streaming->where('username',$username);
        $builder_streaming->groupBy('streaming_platform')->orderBy('streaming_platform','desc')->limit(2,0);
        $watchlist_streaming_data = $builder_streaming->get()->getResult();
            if(empty($watchlist_streaming_data)){
                $watchlist_streaming_data = $watchlist_streaming_data;
            }
            elseif($watchlist_streaming_data[0]->streaming_platform == 'null'){
                $watchlist_streaming_data = $watchlist_streaming_data[1];
            }else{
                $watchlist_streaming_data = $watchlist_streaming_data[0];
            };
            
        return view('watchlist.php',[
            'watchlist_data' => $watchlist_data,
            'watchlist_streaming_data' => $watchlist_streaming_data
        ]); 
        
    }
}
