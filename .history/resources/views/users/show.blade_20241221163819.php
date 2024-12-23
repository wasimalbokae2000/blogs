<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="card container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card-body d-flex align-items-center justify-content-center">
                <div class="profile">
                    <div class="mb-3"><h2 class="card-title text-center fw-bold mb-4">Name = {{ $user->name}}</h2></div>
                    <p class="card-text text-secondary mb-4 text-center">Email= {{$user->email}}</p>
                    <p class="card-text text-secondary mb-4 text-center">Is_admin=
                        @if ($user->is_admin==true)
                            {{print("true")}}
                        @else
                        {{print("false")}}
                        @endif
                    </p>

                </div>
              </div>
            </div>
            <div class="col-12 mt-3 mb-3 ">
                <div class="d-flex align-items-center justify-content-center">
                        <a class="m-1 col-6 w-25 btn btn-primary"  href="{{route('users.edit',$user->id)}}">Edit</a>
                        <a class="m-1 col-6 w-25 btn btn-dark"  href="{{route('users')}}">Back</a>
                </div>
            </div>
        </div>

    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
