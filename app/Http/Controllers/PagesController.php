<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('pages.dashboard')->with('posts', $user->posts);
    }
}
