<?php

namespace App\Http\Controllers\board;

use App\Project;
use App\Role;
use App\Skill;
use App\User;
use App\Service;

use Validator;
use Input;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    protected $users;
    protected $roles;
    protected $skills;
    protected $projects;
    protected $services;

    public function __construct()
    {
        $this->users = new User();
        $this->roles = new Role();
        $this->skills = new Skill();
        $this->projects = new Project();
        $this->services = new Service();
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

        foreach ($request->roles as $role){
            $project->projectRole()->insert([['project_id' => $project->id, 'role_id' => $role,],]);
        }

        foreach ($request->users as $user){
            $project->projectUser()->insert([['project_id' => $project->id, 'user_id' => $user,],]);
        }

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
        return view('admin.board.project.edit')
            ->with('project', $this->projects->find($id))
            ->with('users', $this->users->get())
            ->with('services', $this->services->get())
            ->with('skills', $this->skills->get())
            ->with('roles', $this->roles->get());
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
        $project = $this->projects->find($request->id);

        $rules = [
//            'name' => 'required|unique:project,name,'.$request->id,
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('board.project.edit', $request->id)
                ->withErrors($validator)
                ->withInput();
        }

        $project->name = $request->name;
        $project->customer = $request->customer;
        $project->price = $request->price;
        $project->duur = $request->duur;
        $project->email = $request->email;
        $project->telefoon = $request->telefoon;
        $project->status = $request->status;
        $project->type = $request->type;
        $project->uml = $request->uml;
        $project->usecase = $request->usecase;
        $project->pva = $request->pva;
        $project->contract = $request->contract;

        $project->save();

        $project->projectRole()->where('project_id', $project->id)->delete();
        $project->projectUser()->where('project_id', $project->id)->delete();
        $project->projectSkill()->where('project_id', $project->id)->delete();
        $project->projectService()->where('project_id', $project->id)->delete();

        foreach ($request->roles as $role){
            $project->projectRole()->insert([['project_id' => $project->id, 'role_id' => $role,],]);
        }
        foreach ($request->users as $user){
            $project->projectUser()->insert([['project_id' => $project->id, 'user_id' => $user,],]);
        }
        foreach ($request->skills as $skill){
            $project->projectSkill()->insert([['project_id' => $project->id, 'skill_id' => $skill,],]);
        }
        foreach ($request->services as $service){
            $project->projectService()->insert([['project_id' => $project->id, 'service_id' => $service,],]);
        }

        $images = Input::file('images');
        if (Input::hasFile('images')){
            foreach ($images as $image){
                $extension = $image->getClientOriginalExtension();
                $new_filename = str_random(5) . '.' . $extension;
                $image->move(public_path().'/images/portfolio/', $new_filename);
                $project->projectImage()->insert([
                    [
                        'path' => $new_filename,
                        'project_id' => $project->id,
                    ],
                ]);
            }
        }

        \Session::flash('succes_message','successfully.');

        return redirect()->route('board.project.edit', $request->id);
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
