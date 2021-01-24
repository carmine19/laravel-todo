@extends('layouts.app')

<section id="todo">
    @section('content')

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="new mb-5 mt-5">
                        <a href="{{route('todos.create')}}" class="btn btn-success"> Aggiungi todo </a>
                    </div>
                    <div class="box-list-todo">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descizione</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($todos as $todo)
                            <tr>
                                <td>{{$todo->id}}</td>
                                <td>{{$todo->task_name}}</td>
                                <td>{{$todo->task_description}}</td>
                                <td>
                                    <a href="{{ route('todos.edit', ['todo' => $todo->id ]) }}"
                                        class="btn btn-warning">
                                        Modifica
                                     </a>
                                </td>
                                <td>
                                    <form method="POST" class="d-inline-block"
                                    action="{{ route('todos.destroy', ['todo' => $todo->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Cancella
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    @endsection
</section>

