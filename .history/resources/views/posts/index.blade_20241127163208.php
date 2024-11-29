
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
    {{-- @foreach (explode('|',$post->image) as $img)
                  <div class="carousel-item" >
                    <img src="/images/{{$img}}" class="d-block w-100" alt="...">
                  </div>
                @endforeach --}}
    <h1 class="text-center">Blogs</h1>
    <a href="{{route('posts.create')}}" class="btn btn-warning">Add Blog</a>
    <div class="card-group">
        <div class="row">
            @foreach ($posts as $post )
            <div class="mt-3 mb-3 col-xxl-2 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div id="carouselExampleInterval_{{$post->id}}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @php
                               $imgs=explode('|',$post->image);
                            @endphp
                            @foreach ($imgs as $img)
                            <div class="carousel-item" data-bs-interval="10000">
                                <img src="/images/{{$img}}" class="d-block w-100" alt="...">
                            </div>
                            @endforeach

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval_{{$post->id}}" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval_{{$post->id}}" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>                    <div class="card-body">
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
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
