<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();
           $data = [
               'todos' => $todos,
           ];
           return view('todos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $todos = Todo::all();
           $data = [
               'todos' => $todos,
           ];
           return view('todos.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $new_todo = new Todo();
        // $new_dress->name = $data['name'];
        // $new_dress->description = $data['description'];
        // $new_dress->price = $data['price'];
        // $new_dress->season = $data['season'];
        // $new_dress->size = $data['size'];
        // $new_dress->color = $data['color'];
        $new_todo->fill($data);
        $new_todo->save();

        return redirect()->route('todos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todos = Todo::find($id);
        if($todos) {
            $data = [
                'todo' => $todos
            ];
            return view('todos.edit', $data);
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todos= Todo::find($id);
        $data = $request->all();
        $todos->update($data);

        return redirect()->route('todos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
