<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController extends Controller
{
    protected $project;

    public function __construct()
    {
        $this->project = new Project;
    }

    public function index()
    {
        return view('referentie.index')->with('project', $this->project->where('status', 'ready')->get());
    }

    public function show($name)
    {
        $project = $this->project->where('name', str_replace('-', ' ', $name));
        $projects = $this->project->where('status', 'ready')->get();

        $back = '';
        $foward = '';

        foreach ($projects as $k => $row) {
            if (isset($projects[$k+1]) && $row->name == str_replace('-', ' ', $name)){
                $foward = $projects[$k+1];
            }
            if (isset($projects[$k-1]) && $row->name == str_replace('-', ' ', $name)){
                $back = $projects[$k-1];
            }
        }

        return view('referentie.show')
            ->with('project', $project->first())
            ->with('paginate', ['forward' => $foward, 'back' => $back]);
    }

}
