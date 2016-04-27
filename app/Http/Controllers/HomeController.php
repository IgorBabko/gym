<?php

namespace Gym\Http\Controllers;

use Gym\Http\Requests;
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
        //$this->middleware('auth', ['profile']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function support()
    {
        return view('support');
    }

    public function profile()
    {
        return view('profile');
    }

    public function metrics()
    {
        return view('metrics');
    }

    public function workout()
    {
        return view('workout');
    }

    public function diet()
    {
        return view('diet.muscle_diet'); 
    }

    public function ask()
    {
        return view('ask');
    }
}
