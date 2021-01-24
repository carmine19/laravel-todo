@extends('layouts.app')

<section id="todo-edit">
    @section('content')

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="{{route('todos.update', ['todo' => $todo->id])}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" name="task_name" value="{{$todo->task_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Descrizione</label>
                            <input type="text" class="form-control" name="task_description" value="{{$todo->task_description}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Modifica</button>
                    </form>
                </div>
            </div>
        </div>

    @endsection
</section>


