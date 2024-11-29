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
            <div class="col-12 d-flex">
                <div id="post_{{$post->id}}" class="col-12 carousel slide carousel-fade">
                    <div class="carousel-inner">
                        @foreach ($imgs=explode('|',$post->image) as $index=> $img )
                        @if ($index===0)
                        <div class="carousel-item active" id="{{$img}}">
                                <img height="200" src="/images/{{$img}}" class="d-block w-100" alt="...">
                        </div>
                        @else
                        <div class="carousel-item " id="{{$img}}">
                            <img  height="200" src="/images/{{$img}}" class="d-block w-100" alt="...">
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
             </div>
          </div>
        </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
