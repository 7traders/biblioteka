{{-- <form method="POST" action="{{route('book.store')}}">
   Title: <input type="text" name="book_title">
   ISBN: <input type="text" name="book_isbn">
   Pages: <input type="text" name="book_pages">
   About: <textarea name="book_about"></textarea>
   <select name="author_id">
       @foreach ($authors as $author)
           <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
       @endforeach
    </select>
   @csrf
   <button type="submit">ADD</button>
</form> --}}

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Add new Book</div>
               <div class="card-body">
                    <form method="POST" action="{{route('book.store')}}">

                    {{-- Title: <input type="text" name="book_title"> --}}
                     <div class="form-group">
                        <label>Title: </label>
                        <input type="text" class="form-control" name="book_title">
                        <small class="form-text text-muted">Enter Book Title</small>
                     </div>
                     {{-- ISBN: <input type="text" name="book_isbn"> --}}
                     <div class="form-group">
                        <label>ISBN: </label>
                        <input type="text" class="form-control" name="book_isbn">
                        <small class="form-text text-muted">Enter Book ISBN</small>
                     </div>
                     {{-- Pages: <input type="text" name="book_pages"> --}}
                     <div class="form-group">
                        <label>Pages: </label>
                        <input type="text" class="form-control" name="book_pages">
                        <small class="form-text text-muted">Enter Book Pages</small>
                     </div>
                    {{-- About: <textarea name="book_about"></textarea> --}}
                    <div class="form-group">
                        <label>About: </label>
                        <textarea name="book_about" id="summernote"></textarea>
                        <small class="form-text text-muted">Enter Book Description</small>
                     </div>
                    {{-- <select name="author_id"> --}}
                    <div class="form-group">
                        <label>Author: </label>
                        <select name="author_id">
                            @foreach ($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Select Author</small>
                    </div>

                    <div class="form-group">
                        <label>Publisher: </label>
                        <select name="publisher_id">
                            @foreach ($publishers as $publisher)
                                <option value="{{$publisher->id}}">{{$publisher->title}}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Select Publisher</small>
                    </div>


                    @csrf
                    <button type="submit" class="btn btn-success">ADD</button>
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
