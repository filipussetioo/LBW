<?php

namespace App\Controllers;

use Config\App;
use App\Models\Users;
use App\Models\Watchlist;

class Home extends BaseController
{   
    protected $users_model;
    public $key = 0;

    public function __construct()
    {
        $this->users_model = new \App\Models\Users();
    }

    public function index()
    {
        $readApiMovies = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=4d039461c194e3b4f6c776c5cd99d7c1&language=en-US&page=1');
        $dataMovies = json_decode($readApiMovies,true);

        $apiSeries = file_get_contents('https://api.themoviedb.org/3/tv/popular?api_key=4d039461c194e3b4f6c776c5cd99d7c1&language=en-US&page=1');
        $dataSeries = json_decode($apiSeries,true);

        return view('home.php',[
            'dataMovies' => $dataMovies,
            'dataSeries' => $dataSeries,
        ]);
        
       
    }
    public function login()
    {
        $users = new Users();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
    
    public function logout()
    {       
        session()->destroy();
        
        return redirect()->to('/');
    }
    public function addWatchlist(){
        if(session()->get('name')==""){
            
            $message = "you have to login first!";
            echo "<script type='text/javascript'>
            window.location.href='/';
            alert('$message');</script>";
            return $this->index();
        }
        else{
            $id = $this->request->getVar('id-film');
            $readApiMovies = file_get_contents("https://api.themoviedb.org/3/movie/$id?api_key=4d039461c194e3b4f6c776c5cd99d7c1&language=en-US");
            $dataMovies = json_decode($readApiMovies,true);
            $watchlist = new Watchlist();
            $title = $dataMovies['original_title'];
            $readApiStreamingMovies = file_get_contents("https://api.themoviedb.org/3/movie/$id/watch/providers?api_key=0c256b50796643e062ec0145360c47e9");
            $dataStreamingMovies = json_decode($readApiStreamingMovies,true);
            if(!empty($dataStreamingMovies['results'])&& !empty($dataStreamingMovies['results']['ID']) && !empty($dataStreamingMovies['results']['ID']['flatrate'])){
                foreach($dataStreamingMovies['results']['ID']['flatrate'] as $value){
                    $streaming = json_encode($value['provider_name']);
                }
            }
            else{
                $streaming = "null";
            }
            $username = session()->get('username');
            $backdrop_path = $dataMovies['backdrop_path'];
            
            $insert = $watchlist->insert([
                'watchlistId' => $id,
                'watchlist_title' => $title,
                'streaming_platform' =>$streaming,
                'username' =>$username,
                'backdrop_path'=>$backdrop_path
            ]);

            if($insert){
                // echo "<script type='text/javascript'>
                // window.location.href='/';
                // alert('Item has been added to Watchlist');</script>";
                return $this->index();
            }
            else {
                echo "<pre>";
                echo print_r($watchlist->errors());
                echo "</pre>";
                return $this->index();
            }
            
        }
        
    }
    public function addWatchlist2(){
        if(session()->get('name')==""){
            $message = "you have to login first!";
            echo "<script type='text/javascript'>
            window.location.href='/';
            alert('$message');</script>";
        }
        else{
            $id = $this->request->getVar('id-series');
            $readApiSeries = file_get_contents("https://api.themoviedb.org/3/tv/$id?api_key=0c256b50796643e062ec0145360c47e9&language=en-US");
            $dataSeries = json_decode($readApiSeries,true);
            $watchlist = new Watchlist();
            $title = $dataSeries['name'];
            $readApiStreamingSeries = file_get_contents("https://api.themoviedb.org/3/tv/$id/watch/providers?api_key=0c256b50796643e062ec0145360c47e9");
            $dataStreamingSeries = json_decode($readApiStreamingSeries,true);
            if(!empty($dataStreamingSeries['results'])&& !empty($dataStreamingSeries['results']['ID']) && !empty($dataStreamingSeries['results']['ID']['flatrate'])){
                foreach($dataStreamingSeries['results']['ID']['flatrate'] as $value){
                    $streaming = json_encode($value['provider_name']);
                }
            }
            else{
                $streaming = "null";
            }
            $username = session()->get('username');
            $backdrop_path = $dataSeries['backdrop_path'];
            
            $insert = $watchlist->insert([
                'watchlistId' => $id,
                'watchlist_title' => $title,
                'streaming_platform' =>$streaming,
                'username' =>$username,
                'backdrop_path'=>$backdrop_path
            ]);

            if($insert){
                echo "<script type='text/javascript'>
                window.location.href='/';
                alert('Item has been added to Watchlist');</script>";
            }
            else {
                echo "<pre>";
                echo print_r($watchlist->errors());
                echo "</pre>";
                return $this->index();
            }
        }
        
    }
}
