<?php

namespace App\Controllers;

class Details extends BaseController
{
    public function showDetails()
    {      
        
        return view('details.php'); 
        
    }
    public function showInput(){
        $input = $_POST["title"];
        return view('details.php'); 
        
        
    }
}