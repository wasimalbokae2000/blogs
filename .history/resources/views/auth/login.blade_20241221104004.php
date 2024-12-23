<form action="{{ route("login")}}" method="POST">
    @csrf
    <input type="email" name="email" >
    <input type="password" name="password">
    <button type="submit">send</button>
    @if (isset($error))
        <h1>hhhhhh</h1>
    @endif
    @if(@session('error'))
    <h1>hhhhhhxs</h1>

    @endif

</form>
