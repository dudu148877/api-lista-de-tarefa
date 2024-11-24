<?php

namespace App\Http\Controllers;

use App\Models\eduardo; // Reference to your model
use Illuminate\Http\Request;

class edu extends Controller
{
    public function index()
    {
        $tasks = eduardo::paginate(10);
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'nullable|string|max:1000',
        ]);

        $task = eduardo::create([
            'idade' => $request->idade,
            'nome' => $request->nome,
        ]);

        return response()->json($task, 201);
    }
    
}
