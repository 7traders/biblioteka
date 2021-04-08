<h1>{{$book->title}}</h1>
<h3>{{$book->bookAuthor->name}} {{$book->bookAuthor->surname}}</h3>
<h4><b>Publisher: </b> {{$book->bookPublisher->title}}</h4>
<div>{!!$book->about!!}</div>




