{{-- @foreach ($authors as $author)
  <a href="{{route('author.edit',[$author])}}">{{$author->name}} {{$author->surname}}</a>
  <form method="POST" action="{{route('author.destroy', [$author])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach --}}

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">
                  <h2>List of Authors</h2>

                  <a href="{{route('author.index')}}">Default</a>
                  <a href="{{route('author.index', ['sort' => 'name'])}}">Sort by Name</a>
                  <a href="{{route('author.index', ['sort' => 'surname'])}}">Sort by Surname</a>
               
               </div>
               <div class="card-body">
                <ul class="list-group">
                    @foreach ($authors as $author)
                      <li class="list-group-item list-line">
                        <div>
                          <img src="{{$author->portret}}">
                          {{$author->name}} {{$author->surname}}
                        </div>
                        <div class="list-line__buttons">
                          <a href="{{route('author.edit',[$author])}}" class="btn btn-primary">EDIT</a>
                          <form method="POST" action="{{route('author.destroy', [$author])}}">
                            @csrf
                            <button type="submit" class="btn btn-danger">DELETE</button>
                          </form>
                        </div>
                        <br>
                      </li>
                    @endforeach
                  </ul>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
