<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    public function update(Request $request) {
    $task = Task::find($request->taskId);
    if (!$task) {
        return ['success' => false];
    }
    $task->is_done = $request->status;
    $task->save();
    return ['success' => true];
  }

    public function index(){

    }

    public function create(Request $request) {
        $categories = Category::all();

        $data['categories'] = $categories;

        return view('tasks.create', $data);
    }

    public function create_action(Request $request) {
        $task = $request->only(['title', 'category_id', 'description', 'due_date']);
        $task['user_id'] = 1;
        $dbTask = Task::create($task);
        return redirect(route('home'));
    }

    public function edit(Request $request) {
        $id = $request->id;
        $task = Task::find($id);
        if (!$task) {
            return redirect(route('home'));
        }

        $categories = Category::all();
        $data['categories'] = $categories;

        $data['task'] = $task;

        return view('tasks.edit', $data);
    }

    public function edit_action(Request $request){
        // "_token" => "rHTOpLZqxBXUjFztAbGn1vEzd3JrIK0cm8NnrIXK"
        // "id" => "1"
        // "title" => "aaaaaaaaaaaaaa"
        // "due_date" => "2002-08-12T16:49:26"
        // "category_id" => "9"
        // "description" => "aaaaaaaaa"
        
        $request_data = $request->only(['is_done', 'title', 'due_date', 'category_id', 'description']);
       
       $request_data['is_done'] = $request->is_done ? true : false;
       
        $task = Task::find($request->id);
        if (!$task) {
            return 'Erro de task nao existente';
        }
        $task->update($request_data);
        $task->save();
        return redirect(route('home'));
    }

    public function delete(Request $request) {
        $id = $request->id;
        $task = Task::find($id);

        if ($task) {
            $task->delete();
        }

        return redirect(route('home'));
    }
}
