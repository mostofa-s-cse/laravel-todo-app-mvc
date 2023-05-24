@extends('layouts.app')
@section('content')
<h2 class="text-center">Create Todo</h2> 
<div class="row justify-content-center">
     <div class="col-lg-6">
         <div class="card">
             <div class="card-header">
                 <div class="card-title">Create</div>
                 </div> <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                <li class="list-group-item text-danger">
                                    {{ $error }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                     <form action="/store-todos" method="POST">
                         @csrf 
                         <div class="form-group"> 
                            <label>Name</label>
                             <input type="text" class="form-control" name="name">
                             </div> 
                             <div class="form-group">
                                 <label>Description</label>
                                  <textarea class="form-control" rows="6" name="description"></textarea>
                                 </div>
                                 <div class="form-group">   
                                 <button type="submit" class="mt-2 btn btn-success btn-block">Create Todo</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection

