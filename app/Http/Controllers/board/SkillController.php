<?php

namespace App\Http\Controllers\board;

use App\Skill;

use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    protected $skills;

    public function __construct()
    {
        $this->skills = new Skill();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.board.skill.index')
            ->with('skills', $this->skills->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.board.skill.create');
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
            'skill'          => 'required|unique:skill,skill',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('board.skill.create')
                ->withErrors($validator)
                ->withInput();
        }

        $skill = $this->skills;

        $skill->skill = $request->skill;

        $skill->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('board.skill.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.board.skill.edit')
            ->with('skill', $this->skills->find($id));
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
        $skill = $this->skills->find($request->id);

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

        $skill->skill = $request->skill;

        $skill->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('board.skill.index');
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
