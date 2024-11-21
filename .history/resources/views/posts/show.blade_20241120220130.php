<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
{{-- <form action="{{ route("posts.store") }}" enctype="multipart/form-data" method="POST">
    @method("POST")
    @csrf
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title"> <input type="text" name="title" value="{{ $post->title}}"></h5>
            <textarea class="card-text" name="description" id="" cols="30" rows="10">{{ $post->description }}</textarea>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            <img src="/images/{{$post->image}}"  class="img-fluid" alt="...">

        </div>
    </div>
    <input type="file" name="image">
    <br>
    <button type="submit">Edit</button>
</form> --}}
<!-- Featured 1 - Bootstrap Brain Component -->
    <div class="container py-md-5 py-xl-8">
        <div class="card">
          <div class="row ">
            <div class=" col-6 d-flex align-items-center">
              <div class="card-body">
                <div class="mb-3">
                  <h2 class="card-title fw-bold mb-4">{{ $post->title }}</h2>
                </div>
                <p class="card-text  text-secondary mb-4">{{ $post->description }}</p>
                <a class="btn px-2 py-2 btn-primary " href="#!">Edit</a>

              </div>
            </div>
            <div class="col-6 d-flex">
                <img src="/images/{{$post->image}}"  class="img-fluid" alt="...">
            </div>
          </div>
        </div>
    </div>
