<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $readApi = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=4d039461c194e3b4f6c776c5cd99d7c1&language=en-US&page=1');

        $data = json_decode($readApi,true);

        $apiSeries = file_get_contents('https://api.themoviedb.org/3/tv/popular?api_key=4d039461c194e3b4f6c776c5cd99d7c1&language=en-US&page=1');
        $dataSeries = json_decode($apiSeries,true);
        // $data_array = array(
        //     'datalist' => $data
        // );

        return view('home.php',[
            'data' => $data,
            'dataSeries' => $dataSeries
        ]); 
        
    }
}
