<?php namespace App\Controllers;

use App\Models\TableModel;

class Contact extends BaseController
{
    public function index()
    {
        return view('form/contact');

    }
    
}