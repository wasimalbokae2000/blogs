
<div>
    <h1>header</h1>
    <form action="{{ route("logout") }}" method="POST">
        @method("POST")
        @csrf
        <button type="submit">logout</button>
    </form>
    @yield("son")
</div>
