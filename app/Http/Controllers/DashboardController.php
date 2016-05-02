<?php

namespace Gym\Http\Controllers;

use Illuminate\Http\Request;

use Gym\Http\Requests;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.index');
    } 

    public function pages()
    {
        return view('dashboard.pages.pages');
    }
}
