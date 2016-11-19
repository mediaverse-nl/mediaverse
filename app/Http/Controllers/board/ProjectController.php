<?php

namespace App\Http\Controllers\board;

use App\Project;
use App\Role;
use App\Skill;
use App\User;
use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    protected $users;
    protected $roles;
    protected $skills;
    protected $projects;

    public function __construct()
    {
        $this->users = new User();
        $this->roles = new Role();
        $this->skills = new Skill();
        $this->projects = new Project();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.board.project.index')->with('projects', $this->projects->get() );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.board.project.create')
            ->with('users', $this->users->get())
            ->with('roles', $this->roles->get())
            ->with('skills', $this->skills->get());
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
            'name'          => 'required|unique:project,name',
            'customer'          => 'required',
            'price'          => 'required',
            'email'          => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('board.project.create')
                ->withErrors($validator)
                ->withInput();
        }

        $project = $this->projects;

        $project->name = $request->name;
        $project->customer = $request->customer;
        $project->price = $request->price;
        $project->email = $request->email;

        $project->save();


        \Session::flash('succes_message','successfully.');

        return redirect()->route('board.project.store');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.board.project.edit')->with('project', $this->projects->find($id));
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
        $project = $this->projects->find($id);

        $rules = [
            'name' => 'required|unique:project,name,'.$id,
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('board.project.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $project->name = $request->name;
        $project->customer = $request->customer;
        $project->price = $request->price;
        $project->email = $request->email;

        $project->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('board.project.edit', $id);
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
