<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'is_completed' => 'required|boolean',
    ]);

    $task = Task::create([
        'title' => $validated['title'],
        'is_completed' => $validated['is_completed'],
    ]);

    return response()->json($task);
}

public function markCompleted($id)
{
    $task = Task::findOrFail($id);
    $task->is_completed = true;
    $task->save();

    return response()->json($task);
}

public function getPendingTasks()
{
    $tasks = Task::where('is_completed', false)->get();

    return response()->json($tasks);
}

}
