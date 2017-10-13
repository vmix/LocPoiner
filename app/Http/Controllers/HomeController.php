<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view(env('THEME') . '.index');
    }
    public function services()
    {

        return view(env('THEME') . '.services');
    }
    public function about()
    {

        return view(env('THEME') . '.about');
    }
    public function contact()
    {

        return view(env('THEME') . '.contact');
    }
}
