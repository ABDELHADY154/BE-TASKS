<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $todo = Todo::all(['id', 'title', 'is_done']); //call model
        // dd($todo);
        return view('todo.index', compact('todo')); //call view
    }

    public function store(Request $request)
    {
        // dd($request->all());

        Todo::create($request->all());
        // too much ----------------------------------
        // $todo = new Todo();
        // $todo->title = $request->get('title');
        // $todo->save();



        // $todo = Todo::all(['title']);

        // dd($todo);
        return back();
    }
    public function destroy($todo)
    {
        $todo = Todo::findorfail($todo);
        $todo->delete();
        return redirect(route('todo.index'));

        // dd($todo);
    }
    public function edit(Todo $todo)
    {
        return view('todo.index', [
            'targetItem' => $todo,
            'todo' => $todo = Todo::all(['id', 'title', 'is_done'])

        ]); //call view

        dd($todo);
        // return 'hady';
    }
    public function update(Request $request, Todo $todo)
    {
        // dd($todo, $request->all());
        // $todo::update($request->all());
        $todo->update($request->all());
        // return back();
        return redirect(route('todo.index'));
    }
}
