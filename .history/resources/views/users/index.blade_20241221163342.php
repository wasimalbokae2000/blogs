
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
        <h1 class="text-center">Users</h1>
        <a href="{{route('posts.create')}}" class="btn btn-warning">+</a>

        <div class="row">
            @foreach ($users as $user )
            <div class="mt-3 mb-3 col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                <div class="card ">
                     <div class="card-body">
                        <h5 class="card-title text-success text-center">{{ $user->name}}</h5>
                        <p class="card-text">{{ $user->email }}</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{route('users.show',$user->id)}}" class="m-2 btn btn-primary">Show</a>
                            <a href="{{route('users.edit',$user->id)}}" class="m-2 btn btn-secondary">Edit</a>
                            <a href="{{route('users.delete',$user->id)}}" class="m-2 btn btn-danger">Delete</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{-- @php
                        if(!empty($post->created_at))
                        {
                            $date=date();

                        }
                        @endphp --}}
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
</div>
@endsection
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
