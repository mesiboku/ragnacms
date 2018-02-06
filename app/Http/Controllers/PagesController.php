<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //return view('pages.index', compact('title'));
        return view('pages.index');
    }


    public function about(){
        return view('pages.about');
    }

    public function register(){
        return view('pages.account.register');
    }

    public function login(){
        return view('pages.account.login');
    }

}
