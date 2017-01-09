<?php

namespace App\Http\Controllers\board;

use App\Service;
use Illuminate\Http\Request;

use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->service = new Service();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.board.service.index')
            ->with('services', $this->service->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.board.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|unique:service,name',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('board.service.create', $request->id)
                ->withErrors($validator)
                ->withInput();
        }

        $service = $this->service;

        $service->name = $request->name;

        $service->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('board.service.index', $request->id);
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
    public function update(Request $request)
    {
        $service = $this->service->find($request->id);

        $rules = [
            'skill' => 'required|unique:skill,skill,'.$request->id,
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('board.skill.edit', $request->id)
                ->withErrors($validator)
                ->withInput();
        }

        $service->skill = $request->skill;

        $service->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('board.skill.edit', $request->id);
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
