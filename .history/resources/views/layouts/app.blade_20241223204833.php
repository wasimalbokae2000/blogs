
<div class="bg-dark">
    <form action="{{ route("logout") }}" method="POST">
        @method("POST")
        @csrf
        <button type="submit">logout</button>
    </form>
</div>
@yield("son")
