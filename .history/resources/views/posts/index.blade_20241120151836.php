<h1>welcome posts</h1>
@foreach ($posts as $post )


<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p class="card-text">{{ $post->description }}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

@endforeach