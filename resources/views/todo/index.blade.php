@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        @foreach($todos as $todo)
            <div class="card me-3" style="width: 100%;">
                <div class="card-header">
                    <b>{{$todo->Title}}</b>
                </div>
                <div class="card-body">
                    <blockquote style="flex-direction: column-reverse; justify-content: space-between" class="blockquote mb-0">
                        <p>{{$todo->Description}}</p>
                        <div style="color: #00000099">{{$todo->Deadline}}</div>
                    </blockquote>
                </div>
            </div>
        @endforeach
    </div>
@endsection
