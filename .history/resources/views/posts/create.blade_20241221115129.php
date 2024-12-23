<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body >
    <div class="container">
        <form action="{{ route("posts.store") }}" enctype="multipart/form-data" method="POST">
            @method("POST")
            @csrf
            <div class="mt-2 mb-2">
                <label for="title" class="form-label">Title</label>
                <input  class="form-control" id="title" name="title">
            </div>
            <div class="mt-2 mb-2">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="1"></textarea>
            </div>
            <div class="mt-2 mb-2">
                <label for="image" class="form-label">Files</label>
                <input class="form-control" type="file" id="image" name="image[]" multiple>
            </div>
            <div class="mt-2 mb-2">
            <button class="btn btn-primary" type="submit">Add</button>
            <a class="btn btn-dark" href="{{ route("posts")}}" type="submit">Back</a>

            </div>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
