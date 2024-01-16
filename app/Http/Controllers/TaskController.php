<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    function index(){
        return view('tasks',[
            'tasks' => Task::all()
        ]);}
}
