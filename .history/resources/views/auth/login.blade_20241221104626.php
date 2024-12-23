<form action="{{ route("login")}}" method="POST">
    @csrf
    <input type="email" name="email" >
    <input type="password" name="password">
    <button type="submit">send</button>
    @if(@session('error'))
    <h1> @session('error') </h1>
    @endif

</form>
