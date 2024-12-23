
<div class="bg-dark">
    <form action="{{ route("logout") }}" method="POST">
        @method("POST")
        @csrf
        <button type="submit">logout</button>
    </form>
</div>
@can('p_Is_admin', Auth::user())
<h1 class="text-success text-center">Your Are Admin</h1>
@endcan
@yield("son")
