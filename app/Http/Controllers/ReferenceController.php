<?php

namespace App\Http\Controllers;

use App\Reference;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReferenceController extends Controller
{
    protected $reference;

    public function __construct()
    {
        $this->reference = new Reference();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('referentie.index')->with('references', Reference::all());
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
