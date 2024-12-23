
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="row">
    <div class="col-6 ">
        @can('p_Is_admin', Auth::user())
        <h1 class="text-success text-center">Your Are Admin</h1>
        @endcan
    </div>
    <div class="col-6">
        <form action="{{ route("logout") }}" method="POST">
            @method("POST")
            @csrf
            <button class="btn btn-secondary" type="submit">logout</button>
        </form>
    </div>


</div>

@yield("son")
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
