<form action="{{ route("login")}}" method="POST">
    @csrf
    <input  name="email" type="email">
    <input type="password" name="password">
    <button type="submit">send</button>
</form>
