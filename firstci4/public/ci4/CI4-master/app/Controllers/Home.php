<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view ('header');
        return view('home_page');
        echo view ('footer');
        
    }
}