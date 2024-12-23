<form action="{{ route("login")}}" method="POST">
    @csrf
    <input  name="name">
    <input type="password" name="password">
    <button type="submit">send</button>
</form>
