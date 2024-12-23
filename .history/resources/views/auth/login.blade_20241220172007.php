<form action="{{ route("login") }}"  method="POST">
    @csrf
    <input type="email" name="name">
    <input type="password" name="password">
    <button type="submit">send</button>
</form>
