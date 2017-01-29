<?php

namespace App\Http\Controllers\financial;

use App\Invoice;
use App\Project;
use App\ProjectTask;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FinancialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = new User;
        $invoices = new Invoice;
        $task = new ProjectTask;
        $projects = new Project;

//        $invoices->

        return view('admin.finances.index')->with('', '');
    }

}
