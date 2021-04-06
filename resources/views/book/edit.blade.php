{{-- <form method="POST" action="{{route('book.update',[$book])}}">
       Title: <input type="text" name="book_title" value="{{$book->title}}">
       ISBN: <input type="text" name="book_isbn" value="{{$book->isbn}}">
       Pages: <input type="text" name="book_pages" value="{{$book->pages}}">
       About: <textarea name="book_about">{{$book->about}}"</textarea>
       <select name="author_id">
           @foreach ($authors as $author)
               <option value="{{$author->id}}" @if($author->id == $book->author_id) selected @endif>
                   {{$author->name}} {{$author->surname}}
               </option>
           @endforeach
</select>
       @csrf
       <button type="submit">EDIT</button>
</form> --}}


@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Edit Book</div>
               <div class="card-body">
                    <form method="POST" action="{{route('book.update',[$book])}}">

                    {{-- Title: <input type="text" name="book_title" value="{{$book->title}}"> --}}
                     <div class="form-group">
                        <label>Title: </label>
                        <input type="text" class="form-control" name="book_title" value="{{$book->title}}">
                        <small class="form-text text-muted">Enter Book Title</small>
                     </div>
                     {{-- ISBN: <input type="text" name="book_isbn" value="{{$book->isbn}}"> --}}
                     <div class="form-group">
                        <label>ISBN: </label>
                        <input type="text" class="form-control" name="book_isbn" value="{{$book->isbn}}">
                        <small class="form-text text-muted">Enter Book ISBN</small>
                     </div>
                     {{-- Pages: <input type="text" name="book_pages" value="{{$book->pages}}"> --}}
                     <div class="form-group">
                        <label>Pages: </label>
                        <input type="text" class="form-control" name="book_pages" value="{{$book->pages}}">
                        <small class="form-text text-muted">Enter Book Pages</small>
                     </div>
                    {{-- About: <textarea name="book_about">{{$book->about}}"</textarea> --}}
                    <div class="form-group">
                        <label>About: </label>
                        <textarea name="book_about" id="summernote">{{$book->about}}</textarea>
                        <small class="form-text text-muted">Enter Book Description</small>
                     </div>
                    {{-- <select name="author_id"> --}}
                    <div class="form-group">
                        <label>Author: </label>
                        <select name="author_id">
                            @foreach ($authors as $author)
                                <option value="{{$author->id}}" @if($author->id == $book->author_id) selected @endif>
                                    {{$author->name}} {{$author->surname}}
                                </option>                            
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Select Author</small>
                    </div>


                    <div class="form-group">
                        <label>Publisher: </label>
                        <select name="publisher_id">
                            @foreach ($publishers as $publisher)
                                <option value="{{$publisher->id}}" @if($publisher->id == $book->publisher_id) selected @endif>
                                    {{$publisher->title}}
                                </option>                            
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Select Publisher</small>
                    </div>


                    @csrf
                    <button type="submit" class="btn btn-primary">EDIT</button>
                    </form>
               </div>
           </div>
       </div>
   </div>
</div>
<script>
window.addEventListener('DOMContentLoaded', (event) => {
    $('#summernote').summernote();
});
</script>
@endsection
