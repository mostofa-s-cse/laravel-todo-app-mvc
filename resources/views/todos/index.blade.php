@extends('layouts.app')
@section('content')
<h2 class="text-center">This is todos</h2>
    <div class="row justify-content-center mt-5"> 
        <div class="col-lg-6"> <div class="card"> 
            <div class="card-header"> Todos List </div> 
                <div class="card-body"> 
                    <ul class="list-group"> @foreach($todos as $todo) 
                        <li class="list-group-item">{{ $todo->name }} 
                          @if(!$todo->complete)
                          <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm mx-1"style="float:right">Complete</a>
                          @endif
                            <a href="/todos/{{$todo->id}}" class="btn btn-info btn-sm ml-2"style="float:right">View</a> 
                        </li>
                         @endforeach 
                    </ul> 
                </div> 
            </div> 
        </div> 
    </div> 
@endsection
