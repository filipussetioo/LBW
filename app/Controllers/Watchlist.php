<?php

namespace App\Controllers;

// use App\Models\Watchlist;



class Watchlist extends BaseController
{
    

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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lbw";

        $conn = mysqli_connect($servername,$username,$password,$dbname);

        // $watchList = new Watchlist();
        // $this->model->select('watchlist_title');
        $query = "SELECT * FROM watchlist";
        $queryResult = $conn->query($query);
        return view('watchlist.php',[
            'data' => $data,
            'dataMovies' => $dataMovies,
            'dataSeries' => $dataSeries,
            'queryResult' => $queryResult,
        ]); 
        
    }

    
    

    // public function index(){
    //     $watchList = new WatchList();
    //     $data = $watchList->select('watchlist_title');
    //     return view('watchlist.php',[
    //         'data' => $data
    //     ]);
    // }
}
