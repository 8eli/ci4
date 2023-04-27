<?php

namespace App\Controllers;

class Pi extends BaseController
{
    public function index()
    {
        echo view ('header');
        return view('pi');
        echo view ('footer');
    }
}
