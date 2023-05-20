@extends('layouts.app')
@section('content')
<h2 class="text-center">{{ $todo->name }}</h2>
    <div class="row justify-content-center mt-5"> 
        <div class="col-lg-6"> 
            <div class="card"> 
            <div class="card-header"> Details </div> 
                <div class="card-body"> 
                    <p>Description :</p>
                   <p> {{ $todo->description }}</p>
                   <p>Complete : {{ $todo->complete }}</p>
                </div> 
            </div> 
            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-primary mt-2">Edit</a>
            <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger mt-2">Delete</a>
        </div> 
    </div>  
@endsection

