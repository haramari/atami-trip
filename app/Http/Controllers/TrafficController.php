<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrafficController extends Controller
{

    public function morning()
    {
        return view('options.morning');
    }

    public function evening()
    {
        return view('options.evening');
    }

    public function other()
    {
        return view('options.other');
    }
}
