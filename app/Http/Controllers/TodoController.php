<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        $todo = Todo::paginate(4);
        return view('welcome', compact('todo'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $todo = new Todo();
        $todo->title=$request->title;
        $todo->description=$request->description;
        $todo->save();

        return redirect()->route('todo')->with('message', 'Todo added successfully');
    }
    public function update(Todo $todo)
    {
        $todo->update(['completed'=>true]);

        return redirect()->route('todo')->with('message', 'Todo Task completed successfully');
    }
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todo')->with('message', 'Todo Task deleted successfully');
    }
}
