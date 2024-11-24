<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   
    public function index()
    {
        $tasks = Task::paginate(10);
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|string|max:255', 
            'description' => 'nullable|string|max:1000', 
        ]);
    
   
        $task = Task::create([
            'title' => $request->title,              
            'description' => $request->description,  
            'completed' => false,                   
        ]);
    
        return response()->json($task, 201);
    }
    

  
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(null, 204);
    }
}
