<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function index2()
    {
        return view('home.index2');
    }

    public function index3()
    {
        return view('home.index3');
    }

    public function index4()
    {
        return view('home.index4');
    }

    public function index5()
    {
        return view('home.index5');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }    

}
