
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
    <style>
        .card-text
        {
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            min-height:60px;
        }
    </style>
</head>
<body>
    <h1 class="text-center">Blogs</h1>
    <a href="{{route('posts.create')}}" class="btn btn-warning">Add Blog</a>
    <div class="card-group">
        <div class="row">
            @foreach ($posts as $post )
            <div class="mt-3 mb-3 col-xxl-2 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                <div class="card">




                    <div id="post_{{$post->id}}" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img width="100" height="100" src="/images/451837112_8010131339064623_8209985163965837871_n.jpg-674708bc2357b.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img width="100" height="100" src="/images/windows_black.jpg-674708bc23875.jpg" class="d-block w-100" alt="...">
                        </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#post_{{$post->id}}" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#post_{{$post->id}}" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>













                    {{-- <div class="card-body">
                        <h5 class="card-title text-success text-center">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{route('posts.show',$post->id)}}" class="m-2 btn btn-primary">Show</a>
                            <a href="{{route('posts.edit',$post->id)}}" class="m-2 btn btn-secondary">Edit</a>
                            <a href="{{route('posts.delete',$post->id)}}" class="m-2 btn btn-danger">Delete</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
