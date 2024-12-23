
<div>
    <form action="{{ route("logout") }}" method="POST">
        @method("POST")
        @csrf
        <button type="submit">logout</button>
    </form>
    @yield("son")
</div>
