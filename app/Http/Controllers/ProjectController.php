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

    public function show($id)
    {
        return view('referentie.show')->with('project', $this->project->where('name', $id)->first());
    }

}
