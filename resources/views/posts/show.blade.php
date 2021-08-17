<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
            .shapeB{
                margin: 20px 180px 0px 180px;
            }
        </style>
    
    </head>
    <body>
      @extends("layouts.app")
      @section("content")
        <div class="shapeB">
            <div class="card">
                <div class="card-header">Post info </div>
                <div class="card-body">
                  <p><b>Title :- </b> {{$post->title}}</p>
                  <b>Description :- </b> <br>
                  <p>{{$post->description}}.</p>

                </div>
              </div>    
              <br> <br>
              <div class="card">
                <div class="card-header">Post Crator info </div>
                <div class="card-body">
                  <p><b>Name :- </b>{{$post->name}}</p>
                  <p><b>E-mail :- </b>{{$post->name}}@mail.com</p>
                  <p><b>Created At :- </b>{{$post->created_at}}</p>
                  <br>
                  <b style="color: red">(Search in carbon documention to know how to format it like this) in lab 2</b>

                </div>
              </div>  
        </div>    
      @endsection    
    </body>
</html>
