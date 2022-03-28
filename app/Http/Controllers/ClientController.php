<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        return view('client.home');
    }

    public function menu(){
        return view('client.menu');
    }
    public function book(){
        return view('client.book');
    }
    public function about(){
        return view('client.about');
    }
}
