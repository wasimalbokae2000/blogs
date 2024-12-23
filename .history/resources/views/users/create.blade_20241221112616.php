<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body class="">
    <div class="container">
        <form action="{{ route("users.store") }}"  method="POST">
            @method("POST")
            @csrf
            <div class="mt-2 mb-2">
                <label for="name" class="form-label">Name</label>
                <input  class="form-control" id="name" name="name">
            </div>
            <div class="mt-2 mb-2">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" type="email" id="email" name="email" >
            </div>
            <div class="mt-2 mb-2">
            <button class="btn btn-primary" type="submit">Add</button>
            <a class="btn btn-dark" href="{{ route("posts")}}" type="submit">Back</a>

            </div>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
