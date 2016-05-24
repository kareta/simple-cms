<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;

class PagesController extends Controller
{
    protected $pages;

    public function __construct(Page $pages)
    {
        $this->pages = $pages;
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = $this->pages->all();
        return view('backend.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Page $page)
    {
        return view('backend.pages.form', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageRequest $request)
    {
        $this->pages->create($request->only('title', 'uri', 'name', 'content'));

        return redirect(route('backend.pages.index'))->with('status', 'Page has beed created.');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = $this->pages->findOrFail($id);

        return view('backend.pages.form', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, $id)
    {
        $page = $this->pages->findOrFail($id);
        $page->fill($request->only('title', 'uri', 'name', 'content'))->save();

        return redirect(route('backend.pages.edit', $page->id))
            ->with('status', 'Page has beed changed.');
    }

    public function confirm($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
