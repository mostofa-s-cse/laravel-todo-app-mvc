<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos',Todo::all());
    }

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todos.create');
    }
    public function store()
    {
        $this->validate(request(),[
            'name'=>'required|min:6|max:20',
            'description'=>'required',
            'complete'=>'required'
        ]);

        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->complete = $data['complete'];
        $todo->save();
        session()->flash('success','Todo Created Successfully');
        return redirect('/todos');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit')->with('todo',$todo);
    }

    public function update(Todo $todo)
    {
        $this->validate(request(),[
            'name'=>'required|min:6|max:20',
            'description'=>'required',
            'complete'=>'required'
        ]);

        $data = request()->all();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->complete = $data['complete'];
        $todo->save();
        session()->flash('success','Todo Updated Successfully');
        return redirect('/todos');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        session()->flash('success','Todo Delete Successfully');
        return redirect('/todos');
    }
}
