
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
                    @foreach (explode('|',$post->image) as $img)
                    <img src="images/{{$img}}"  class="img-fluid">
                    @endforeach
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