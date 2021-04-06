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
               <div class="card-header">
               <h2>List of Books</h2>

                <form action="{{route('book.index')}}" method="get" class="make-inline">
                  <div class="form-group make-inline">
                    <label>Author: </label>
                    <select class="form-control" name="author_id">
                      <option value="0" disabled @if($filterBy == 0) selected @endif>Select Author</option>
                      @foreach ($authors as $author)
                        <option value="{{$author->id}}" @if($filterBy == $author->id) selected @endif>
                          {{$author->name}} {{$author->surname}}
                        </option>
                      @endforeach
                    </select>
                  </div>

                  <label class="form-check-label" >Sort by title:</label>
                  <label class="form-check-label" for="sortASC">ASC</label>
                  <div class="form-group make-inline column">
                    <input type="radio" class="form-check-input" name="sort" value="asc" id="sortASC" @if($sortBy == 'asc') checked @endif>
                  </div>
                  <label class="form-check-label" for="sortDESC">DESC</label>
                  <div class="form-group make-inline column">
                    <input type="radio" class="form-check-input" name="sort" value="desc" id="sortDESC" @if($sortBy == 'desc') checked @endif>
                  </div>              

                  <button type="submit" class="btn btn-primary">Filter</button>
                </form>
                
                <a href="{{route('book.index')}}" class="btn btn-info">Clear filter</a>

               </div>
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
                          <div class="list-line__books__author">
                            <b>Publisher: </b> {{$book->bookPublisher->title}}
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
