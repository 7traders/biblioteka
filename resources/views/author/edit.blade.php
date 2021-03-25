{{-- <form method="POST" action="{{route('author.update',[$author->id])}}">
   Name: <input type="text" name="author_name" value="{{$author->name}}">
   Surname: <input type="text" name="author_surname" value="{{$author->surname}}">
   @csrf
   <button type="submit">EDIT</button>
</form> --}}

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Edit Author</div>
               <div class="card-body">
                  <form method="POST" action="{{route('author.update',[$author->id])}}">

                     {{-- Name: <input type="text" name="author_name" value="{{$author->name}}"> --}}
                     <div class="form-group">
                        <label>Name: </label>
                        <input type="text" class="form-control" name="author_name" value="{{$author->name}}">
                        <small class="form-text text-muted">Enter Authors Name</small>
                     </div>

                     {{-- Surname: <input type="text" name="author_surname" value="{{$author->surname}}"> --}}
                     <div class="form-group">
                        <label>Surname: </label>
                        <input type="text" class="form-control" name="author_surname" value="{{$author->surname}}">
                        <small class="form-text text-muted">Enter Authors Surname</small>
                     </div>

                     @csrf
                     <button type="submit" class="btn btn-primary">EDIT</button>
                  </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection