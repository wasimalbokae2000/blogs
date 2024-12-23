
<div class="row">
    <div class="col-9 d-flex justify-content-end">
        @can('p_Is_admin', Auth::user())
        <h1 class="text-success text-center">Your Are Admin</h1>
        @endcan
    </div>
    <div class="col-3 col-9 d-flex justify-content-end">
        <form action="{{ route("logout") }}" method="POST">
            @method("POST")
            @csrf
            <button class="btn btn-secondary" type="submit">logout</button>
        </form>
    </div>


</div>

@yield("son")
