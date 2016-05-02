<?php

namespace Gym\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use Gym\Http\Requests;
use Gym\Page;
use Gym\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    } 
}
