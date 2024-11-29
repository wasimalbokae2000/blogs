<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="py-md-5 py-xl-8 bg-dark">
    <div class="container">
        <div class="card">
          <div class="row ">
            <div class=" col-6 d-flex align-items-center">
              <div class="card-body">
                <div class="mb-3"><h2 class="card-title fw-bold mb-4">{{ $post->title }}</h2></div>
                <p class="card-text text-secondary mb-4">{{ $post->description }}</p>
                <a class="btn px-2 py-2 btn-primary"  href="{{route('posts.edit',$post->id)}}">Edit</a>
              </div>
            </div>
            <div class="col-6 d-flex">
                <img src="/images/{{$post->image}}"  class="img-fluid" alt="...">
            </div>
          </div>
        </div>
    </div>
  </div>
