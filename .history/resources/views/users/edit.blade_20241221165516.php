<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <form action="{{route("users.update",$user->id)}}" method="POST">
    @method("POST")@csrf
    <div class="card mb-3">
        <div class="card-body">
            <div class="row ">
                <div class="col-6">
                    <div class="mt-2 mb-2">
                        <label for="title" class="form-label">Name</label>
                        <input  class="form-control" value="{{$user->name}}" id="user" name="user">
                    </div>
                    <div class="mt-2 mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" id="password" name="password" >
                    </div>
                    <div class="mt-2 mb-2">
                        <label for="password_confirmation" class="form-label">Password</label>
                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="form-check mt-2 mb-2">
                        <input class="form-check-input" type="checkbox"  name="is_admin" id="is_admin">
                        <label class="form-check-label" for="is_admin">Is Admin</label>
                    </div>
                    <div class="mt-2 mb-2">
                    <button class="btn btn-primary" type="submit">Edit</button>
                    <a class="btn btn-dark" href="{{ route("users")}}" type="submit">Back</a>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
