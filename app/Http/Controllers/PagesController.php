<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function services(){
        return view('pages.services');
    }

    public function about(){
        return view('pages.about');
    }

    public function dashboard(){
        return view('pages.dashboard');
    }
}
