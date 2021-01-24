@extends('layouts.app')

<section id="todo-create">
    @section('content')

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="{{route('todos.store')}}">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" name="task_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Descrizione</label>
                            <input type="text" class="form-control" name="task_description">
                        </div>

                        <button type="submit" class="btn btn-primary mt-5">Salva</button>
                    </form>
                </div>
            </div>
        </div>

    @endsection
</section>



