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
<section class=" py-md-5 py-xl-8 bg-dark">
    <div class="container">
        <div class="card">
          <div class="row g-0">
            <div class="col-12 col-md-6 order-1 order-md-0 d-flex align-items-center">
              <div class="card-body p-md-4 p-xl-6 p-xxl-9">
                <div class="entry-header mb-3">
                  <ul class="entry-meta list-unstyled d-flex mb-4">
                    <li>
                      <a class="d-inline-flex px-2 py-1 link-primary text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-2 text-decoration-none" href="#!">Entrepreneurship</a>
                    </li>
                  </ul>
                  <h2 class="card-title entry-title display-3 fw-bold mb-4 lh-1">
                    <a class="link-dark text-decoration-none" href="#!">{{ $post->title }}</a>
                  </h2>
                </div>
                <p class="card-text  text-secondary mb-4">{{ $post->description }}</p>
              </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <img src="/images/{{$post->image}}"  class="img-fluid" alt="...">
            </div>
          </div>
        </div>
    </div>
  </section>
