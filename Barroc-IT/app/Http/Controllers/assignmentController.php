<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class assignmentController extends Controller
{

    public function index(){
        $projects = \App\Project::all();
        return view('assignments')->with('projects', $projects);
    }

}
