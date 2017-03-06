<?php

namespace App\Http\Controllers\developer;

use App\Project;
use App\ProjectUser;
use App\ProjectTask;

use Illuminate\Http\Request;

use DB;
use Auth;
use Carbon\Carbon;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    protected $MyProjects;
    protected $project;
    protected $projectTask;

    public function __construct()
    {
        $this->MyProjects = new ProjectUser();
        $this->project = new Project();
        $this->projectTask = new ProjectTask();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.developer.project.index')
            ->with('projects', $this->MyProjects->where('user_id', Auth::user()->id)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = $this->projectTask;

        $rules = [
            'task_name' => 'required',
            'user' => 'required',
            'moscow' => 'required',
            'do_min' => 'required',
            'project_id' => 'required',
            'status' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('developer.project.show', $request->project_id)
                ->withErrors($validator)
                ->withInput();
        }

        $project->task_name = $request->task_name;
        $project->project_id = $request->project_id;
        $project->user_id = $request->user;
        $project->moscow = $request->moscow;
        $project->do_min = $request->do_min;
        $project->done_min = 0;
        $project->status = 'stop';
        $project->description = $request->description;
        $project->remark = $request->remark;

        $project->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('developer.project.show', $request->project_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = $this->project->find($id);

        $array = [];
        foreach ($project->projectUser()->get() as $user){
            $array[] = $user->user;

//            dd($user->user);
        }
//        dd($array);

        $status = DB::table('project_task')
            ->select(DB::raw('count(*) as status, status'))
            ->where('status', 'running')
            ->where('user_id', Auth::user()->id)
            ->groupBy('status')

            ->exists();

        return view('admin.developer.project.show')->with('project', $project)->with('users', $array)->with('status', $status);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = $this->projectTask->find($id);

        $project = $this->project->find($task->project->id);

        $array = [];
        foreach ($project->projectUser as $user){
            $array[] = $user->user;
        }

        return view('admin.developer.project.edit')->with('task', $task)->with('users', $array);
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
        $task = $this->projectTask->find($request->id);

        $rules = [
            'task_name' => 'required',
            'user' => 'required',
            'moscow' => 'required',
            'do_min' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('developer.project.edit', $task->id)
                ->withErrors($validator)
                ->withInput();
        }

        $task->do_min = $request->do_min;
        $task->task_name = $request->task_name;
        $task->user_id = $request->user;
        $task->remark = $request->remark;
        $task->moscow = $request->moscow;
        $task->description = $request->description;

        $task->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('developer.project.show', $task->project->id);
    }

    public function startTimer(Request $request)
    {
        $task = $this->projectTask->find($request->id);

        if($request->status == 'stop'){

            $startTime = Carbon::parse($task->updated_at);
            $finishTime = Carbon::now();
            $totalDuration = $finishTime->diffInSeconds($startTime);

            $task->done_min = $task->done_min + $totalDuration;
        }

        $task->status = $request->status;

        $task->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('developer.project.show', $task->project->id);
    }

    public function taskStatus(Request $request)
    {
        $task = $this->projectTask->find($request->id);

        if($request->check){
            $task->check = false;
        }else{
            $task->check = true;
        }

        $task->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('developer.project.show', $task->project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $task = $this->projectTask->find($request->invoice_item);

        $this->projectTask->destroy($task->id);

        return redirect()->route('developer.project.show', $task->project->id);

    }
}
