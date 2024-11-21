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
                    <a class="link-dark text-decoration-none" href="#!">How to Design and Produce Products from Scratch</a>
                  </h2>
                </div>
                <p class="card-text entry-summary text-secondary mb-4">
                  Creating a successful product from scratch is the stuff that entrepreneurial dreams are made of, but it's a journey that's equal parts challenging and thrilling.
                </p>
                <div class="entry-footer">
                  <ul class="entry-meta list-unstyled d-flex align-items-center m-0">
                    <li>
                      <a class="fs-7 link-secondary text-decoration-none d-flex align-items-center" href="#!">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                          <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                          <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        <span class="ms-2 fs-7">13 Apr 2030</span>
                      </a>
                    </li>
                    <li>
                      <span class="px-3">&bull;</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <img src="/images/{{$post->image}}"  class="img-fluid" alt="...">
            </div>
          </div>
        </div>
    </div>
  </section>
