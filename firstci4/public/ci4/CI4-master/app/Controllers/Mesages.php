<?php

namespace App\Controllers;

class Messages extends BaseController
{
    public function index()
    {
        return view('messages');
    }
}
