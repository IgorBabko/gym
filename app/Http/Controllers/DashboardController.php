<?php

namespace Gym\Http\Controllers;

use Illuminate\Http\Request;

use Gym\Http\Requests;
use Gym\Page;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.index');
    } 

    public function pages()
    {
        $pages = Page::paginate(10);

        return view('dashboard.pages.pages', compact('pages'));
    }
}
