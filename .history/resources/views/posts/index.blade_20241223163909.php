
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title></title>
    <style>
        .card-text
        {
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            min-height: 80px;
        }
    </style>
</head>
<body>
    @extends("layouts.app")
    @section("son")
    <div class="container">
        @can ('is_admin')
        <h1>hello admin</h1>
        @endcan
        <h1 class="text-center">Blogs</h1>
        <a href="{{route('posts.create')}}" class="btn btn-warning">+</a>

        <div class="row">
            @foreach ($posts as $post )
            <div class="mt-3 mb-3 col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                <div class="card ">
                    <div id="post_{{$post->id}}" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                            @foreach ($imgs=json_decode($post->image)  as $index=> $img )
                            @if ($index===0)
                            <div class="carousel-item active" id="{{$img}}">
                                    <img  height="200" src="/images/{{$img}}" class="d-block w-100" alt="Not Found">
                            </div>
                            @else
                            <div class="carousel-item " id="{{$img}}">
                                <img height="200" src="/images/{{$img}}" class="d-block w-100" alt="Not Found">
                        </div>
                            @endif
                        @endforeach
                    </div>
                        @if (count($imgs)>1)
                        <button class="carousel-control-prev" id="post_{{$post->id}}" data-bs-target="#post_{{$post->id}}" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next"  id="bpost_{{$post->id}}"   data-bs-target="#post_{{$post->id}}" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                        @endif
                    </div>
                     <div class="card-body">
                        <h5 class="card-title text-success text-center">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{route('posts.show',$post->id)}}" class="m-2 btn btn-primary">Show</a>
                            <a href="{{route('posts.edit',$post->id)}}" class="m-2 btn btn-secondary">Edit</a>
                            @can ('is_admin')
                            <a href="{{route('posts.delete',$post->id)}}" class="m-2 btn btn-danger">Delete</a>
                            @endcan
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">
                            @if ( empty($post->updated_at))
                            {{ $post->created_at->diffForHumans() }}
                            @else
                            {{$post->updated_at->diffForHumans()}}
                            @endif

                         </small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if(@session('error'))
        <h1>  {{session('error')}}</h1>
        @endif

</div>
@endsection
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
