{{-- @foreach ($books as $book)
  <a href="{{route('book.edit',[$book])}}">{{$book->title}} {{$book->bookAuthor->name}} {{$book->bookAuthor->surname}}</a>
  <form method="POST" action="{{route('book.destroy', [$book])}}">
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
               <div class="card-header">List of Books</div>
               <div class="card-body">
                <ul class="list-group">
                    @foreach ($books as $book)
                      <li class="list-group-item list-line">
                        <div class="list-line__books">
                          <div class="list-line__books__title">
                            {{$book->title}}
                          </div>
                          <div class="list-line__books__author">
                            {{$book->bookAuthor->name}} {{$book->bookAuthor->surname}}
                          </div>
                        </div>
                        <div class="list-line__buttons">
                          <a href="{{route('book.edit',[$book])}}" class="btn btn-primary">EDIT</a>
                          <form method="POST" action="{{route('book.destroy', [$book])}}">
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
