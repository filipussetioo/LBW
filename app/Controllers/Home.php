<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $readApiMovies = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=4d039461c194e3b4f6c776c5cd99d7c1&language=en-US&page=1');

        $dataMovies = json_decode($readApiMovies,true);

        $readApiSeries = file_get_contents('https://api.themoviedb.org/3/tv/popular?api_key=0c256b50796643e062ec0145360c47e9&language=en-US&page=1');
        $dataSeries = json_decode($readApiSeries,true);
        // $data_array = array(
        //     'datalist' => $data
        // );
        
        return view('home.php',[
            'dataMovies' => $dataMovies,
            'dataSeries' => $dataSeries
        ]); 
        
    }
}
