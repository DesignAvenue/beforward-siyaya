<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contactUs(){
        return view('contact');
    }
    public function aboutUs(){
        return view('about');
    }
    public function home(){
        return view('welcome');
    }
}
