<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='Welcome to Ragnarok';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }


    public function about(){
        return view('pages.about');
    }

    public function register(){
        return view('pages.register');
    }


    public function sample(){
        return view('pages.sample');
    }

}
