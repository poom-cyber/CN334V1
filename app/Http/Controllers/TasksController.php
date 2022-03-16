<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = auth()->user()->Task;
        return view('dashboard', compact('tasks'));
    }

    public function add()
    {
    	return view('add');
    }

    public function seeAllTodo()
    {
        return view('allTank');
    }

    public function editTank()
    {
        return view('editTank');
    }


    public function create(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'model' => 'required'
        ]);
    	$task = new Task();
    	$task->description = $request->description;
        $task->model = $request->model;
    	$task->user_id = auth()->user()->id;
    	$task->save();
    	return redirect('/dashboard'); 
    }

    public function edits(Task $task)
    {

    	if (auth()->user()->id == $task->user_id)
        {            
                return view('edit', compact('task'));
        }           
        else {
             return redirect('/dashboard');
         }            	
    }

    public function update(Request $request, Task $task)
    {
    	if(isset($_POST['delete'])) {
    		$task->delete();
    		return redirect('/dashboard');
    	}
    	else
    	{
            $this->validate($request, [
                'description' => 'required',
                'model' => 'required'
            ]);
            $task->description = $request->description;
            $task->model = $request->model;
            $task->user_id = auth()->user()->id;
            $task->save();
	    	return redirect('/dashboard'); 
    	}    	
    }
}