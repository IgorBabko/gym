<?php

namespace Gym\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
