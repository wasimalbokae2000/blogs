<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="py-md-5 py-xl-8 bg-dark">
    <div class="container">
        <div class="card">
          <div class="row ">
            <div class=" col-6 d-flex align-items-center">
              <div class="card-body">
                <div class="mb-3"><h2 class="card-title fw-bold mb-4">{{ $post->title }}</h2></div>
                <a class="btn px-2 py-2 btn-primary"  href="{{route('posts.edit',$post->id)}}">Edit</a>
              </div>
            </div>
            <div class="col-6 d-flex">
                @foreach (explode('|',$post->image) as $img)
                <img src="/images/{{$img}}"  class="img-fluid" alt="...">
                @endforeach
            </div>
          </div>
        </div>
    </div>
  </div>
