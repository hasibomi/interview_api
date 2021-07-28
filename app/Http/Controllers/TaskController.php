<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;
use App\Http\Requests\TaskUpdateRequest;

class TaskController extends Controller
{
    public function index()
    {
        return response()->json(Task::all());
    }

    public function create(TaskRequest $request)
    {
        Task::create($request->all());

        return response()->json(
            [
                'status' => 'ok'
            ]
        );
    }

    public function edit($id)
    {
        return response()->json(Task::find($id));
    }

    public function update($id, TaskUpdateRequest $request)
    {
        $task = Task::find($id);

        $task->is_done = $request->is_done;

        $task->save();

        return response()->json([
            'status' => 'ok'
        ]);
    }

    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        return response()->json([
            'status' => 'ok'
        ]);
    }
}
