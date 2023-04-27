<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        echo view ('header');
        return view('contact');
        echo view ('footer');
    }
}
