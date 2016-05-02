<?php

namespace Gym\Http\Controllers;

use Gym\Http\Requests;
use Illuminate\Http\Request;
use Gym\Page;

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
        $pages = Page::where('type', 'diet')->get();
        
        return view('diet', compact('pages'));
    }

    public function page($name)
    {
        $text = Page::where('name', $name)->first()->text;

        return view('page', compact('text')); 
    }

    public function ask()
    {
        return view('ask');
    }

    public function trainingByBodyTypes()
    {
        return view('training_by_body_types');
    }

    public function search(Request $request)
    {
        $pages = Page::search($request->input('name'))->get();

        return view('search', compact('pages'));
    }
}
