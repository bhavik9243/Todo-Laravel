<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use App\Http\Requests;

class TodoController extends Controller
{
    public function todo()
    {
    	$todos = Todo::orderBy('created_at', 'asc')->get();

    	return view('todo', [
    		'todos'=> $todos,
    	]);
    }

    public function postTodo(Request $request)
    {
    	$this->validate($request, [
    		'todo_name' => 'required|min:2|max:255'
    	]);

    	$todo_name = $request['todo_name'];

    	$todo = new Todo();

    	$todo->todo_name = $todo_name;

    	$todo->save();

    	return redirect()->route('todo');
    }

    public function postDelete(Request $request)
    {
        $todo_delete = $request->todo_delete;

        $delete = Todo::where('todo_id', $todo_delete);

        $delete->delete();

        return redirect()->route('todo');
    }
}
