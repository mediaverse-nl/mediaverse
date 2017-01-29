<?php

namespace App\Http\Controllers;

use Auth;
use App\ProjectUser;
use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.index')->with('projects', ProjectUser::where('user_id', Auth::user()->id)->get());
    }
}
