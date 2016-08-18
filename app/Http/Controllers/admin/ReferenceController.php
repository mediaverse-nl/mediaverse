<?php

namespace App\Http\Controllers\admin;

use App\Reference;

use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        return view('admin.reference.index')->with('references', $this->reference->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reference.create');

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
//            'status'          => 'required',
            'thumbnails'     => 'mimes:jpg,jpeg',
            'video'          => 'mimes:mp4,webm',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.reference.create')
                ->withErrors($validator)
                ->withInput();
        }

        $this->reference->title = $request->title;
        $this->reference->link = $request->link;
        $this->reference->beschrijving = $request->beschrijving;
        $this->reference->werkzaamheden = $request->werkzaamheden;
        $this->reference->resultaten = $request->resultaten;
//        $this->reference = $request->beschrijving;

        $this->reference->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('admin.reference.index');
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
        //
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
        //
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
