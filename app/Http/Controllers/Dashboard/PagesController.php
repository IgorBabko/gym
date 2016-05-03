<?php

namespace Gym\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use Gym\Http\Requests;
use Gym\Http\Controllers\Controller;
use Gym\Page;
use Gym\Http\Requests\PageFormRequest;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::paginate(10);

        return view('dashboard.pages.index', compact('pages')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('dashboard.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Gym\Http\Requests\PageFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageFormRequest $request)
    {
        Page::create($request->all());

        return redirect()->route('dashboard.pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Gym\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('dashboard.pages.edit', compact('page')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Gym\Page  $page
     * @param  Gym\Http\Requests\PageFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(Page $page, PageFormRequest $request)
    {
        $page->update($request->all());

        return redirect()->route('dashboard.pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete(); 

        return back();
    }
}
