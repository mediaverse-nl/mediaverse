<?php

namespace App\Http\Controllers;

use App\Reference;
use App\Page;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReferenceController extends Controller
{
    protected $reference;
    protected $page;

    public function __construct()
    {
        $this->reference = new Reference();
        $this->page = Page::where('page', \Request::route()->getPath())->first();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('referentie.index')->with('references', Reference::all())->with('seo', $this->page);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($reference)
    {
        $this->reference->where('name', str_replace('-', ' ', $reference))->first();

        return view('referentie.show');
    }   

}
