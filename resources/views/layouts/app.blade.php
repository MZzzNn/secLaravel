<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <style>
            .myTab{
                margin: 10px  500px auto;
                float: center;
                text-align: center;
                
            }
            #btn1{
                margin: 0px 20px 20px 20px;
                color: white
            }
            #btn2{
                margin-bottom:20px ;
                background: green;
                border-color: green;
            }
        </style>
    </head>
    <body>
          <div class="myTab">
            <nav class="nav">
                <a class="btn btn-primary" id="btn1" href="/posts">All Posts</a>
                <a class="btn btn-primary"  id="btn2" href="/posts/create">Create Post</a>
                <a class="btn btn-info" id="btn1" href="#" >Link</a>
              </nav>
          </div>
        <div class="container">
            @yield('content')
        </div>

    </body>
</html>