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
<section class="">
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
                    <li>
                      <a class="link-secondary text-decoration-none d-flex align-items-center" href="#!">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                          <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                          <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                        </svg>
                        <span class="ms-2 fs-7">158</span>
                      </a>
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
