<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Page;

use Validator;
use Route;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    protected $page;

    public function __construct()
    {
        $this->page = new Page();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.index')->with('pages', $this->page->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collection = Route::getRoutes();
        $routes = [];

        foreach($collection as $route) {
            $routes[] = $route->getPath();
        }

        $collection_pages = $this->page->get();
        $pages = [];

        foreach($collection_pages as $page) {
            $pages[] = $page->page;
        }

        return view('admin.pages.create')->with('pages', $pages)->with('routes', $routes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [

        ];
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'keywords' => 'required',
            'page' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.pages.create')
                ->withErrors($validator)
                ->withInput();
        }

        $page = $this->page;

        $page->title = $request->title;
        $page->description = $request->description;
        $page->keywords = $request->keywords;
        $page->page = $request->page;

        $page->save();


        \Session::flash('succes_message','Thanks for contacting us!');

        return redirect()->route('admin.pages.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = $this->page->find($id);

        return view('admin.pages.edit')->with('page', $page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [

        ];
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'keywords' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.pages.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $page = $this->page->find($id);

        $page->title = $request->title;
        $page->description = $request->description;
        $page->keywords = $request->keywords;

        $page->save();

        \Session::flash('succes_message','Thanks for contacting us!');

        return redirect()->route('admin.pages.index');
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
