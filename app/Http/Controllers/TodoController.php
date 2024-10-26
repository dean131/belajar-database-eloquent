<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();

        return view('todos.index', ['todos' => $todos]);
    }

    public function detail($id) {
        $todo = Todo::find($id);

        return view('todos.detail', ['todo' => $todo]);
    }

    public function halaman_create() {
        return view('todos.create');    
    }

    public function create_todo(Request $request) {
        Todo::create($request->all());
        return redirect()->route('todo.index');
    }

    public function halaman_update($id) {
        $todo = Todo::find($id);
        return view('todos.update', ['todo' => $todo]);
    }

    public function update_todo(Request $request, $id) {
        $todo = Todo::find($id);

        $todo->judul = $request->input('judul');
        $todo->deskripsi = $request->input('deskripsi');

        $todo->update();
        
        return redirect()->route('todo.index');
    }

    public function delete_todo($id) {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todo.index');
    }
}
