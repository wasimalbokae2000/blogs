
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container-fluid">
<div class="row pt-2 bg-black">
    <div class="col-9 ">
        @can('p_Is_admin', Auth::user())
        <h1 class="text-success text-end">Your Are Admin</h1>
        @endcan
    </div>
    <div class="col-3 d-flex justify-content-end">
        <form action="{{ route("logout") }}" method="POST">
            @method("POST")
            @csrf
            <button class="btn btn-secondary" type="submit">logout</button>
        </form>
    </div>


</div>

@yield("son")
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
