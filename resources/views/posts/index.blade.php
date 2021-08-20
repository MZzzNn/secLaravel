
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
            .shapeB{
                margin: 20px ;
                text-align: center
            }
          
            table td ,table{
                text-align: center,
            }
        </style>
    
    </head>
    <body>
    @extends("layouts.app")
    @section("content")
        <div class="shapeB">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Posted By</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                        <a class="btn btn-success" href="/posts/{{$post->id}}">show</a>
                        <a class="btn btn-warning" href="/posts/{{$post->id}}/edit">Edit</a>
                        <form action="/posts/{{ $post->id }}" method="post" style="display: inline-block">
                            @method('Delete')
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>  
                @endforeach
            </table>
        </div>
        @endsection
    </body>
</html>
