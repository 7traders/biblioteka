{{-- <form method="POST" action="{{route('author.store')}}">
   Name: <input type="text" name="author_name">
   Surname: <input type="text" name="author_surname">
   @csrf
   <button type="submit">ADD</button>
</form> --}}

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create new Author</div>
               <div class="card-body">
                 <form method="POST" action="{{route('author.store')}}">

                     {{-- Name: <input type="text" name="author_name"> --}}
                     <div class="form-group">
                        <label>Name: </label>
                        <input type="text" class="form-control" name="author_name" value="{{old('author_name')}}">
                        <small class="form-text text-muted">Enter new Authors Name</small>
                     </div>

                     {{-- Surname: <input type="text" name="author_surname"> --}}
                     <div class="form-group">
                        <label>Surname: </label>
                        <input type="text" class="form-control" name="author_surname" value="{{old('author_surname')}}">
                        <small class="form-text text-muted">Enter new Authors Surname</small>
                     </div>

                     @csrf
                     <button type="submit" class="btn btn-success">ADD</button>
                  </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
