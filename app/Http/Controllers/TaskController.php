<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function create($project)
    {
        return view('tasks.create', ['project_id' => $project]);
    }

    public function store( Request $request)
    {
        $this->valideteTask();
        $task = new Task(request(['project_id','title', 'status', 'description']));
        $task->files = $request->file('files')->store('uploads', 'public');

        $task->save();

        return redirect(route('project.show', $task->project_id))->with('success', 'Task was successfully created');
    }

    public function show(Project $project, Task $task)
    {

        return view('tasks.show',['project' => $project, 'task' => $task]);
    }

    public function edit( Task $task)
    {

        return view('tasks.edit',['task' => $task]);
    }

    public function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
        'title' => 'required|max:255',
        'status' => 'required',
        'description' => 'required',
        'files' => '',
    ]);
        $task->update($validatedData);

        return redirect( route('project.show', $task->project_id))->with('success', 'Task was successfully updated');

    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect(route('project.show', $task->project_id))->with('success', 'Task was successfully deleted');
    }

    public function valideteTask()
    {
        return request()->validate([
            'title' => 'required|max:255',
            'status' => 'required',
            'description' => 'required',
            'files' => 'required',
        ]);
    }

}
