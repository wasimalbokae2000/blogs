{{-- <form action="{{ route("login")}}" method="POST">
    @csrf
    <input type="email" name="email" >
    <input type="password" name="password">
    <button type="submit">send</button>
    @if(@session('error'))
    <h1>  {{session('error')}}</h1>
    @endif

</form> --}}



@extends("layouts.app")
@section("son")
<form action="{{route("login")}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
    @if(@session('error'))
    <h1>  {{session('error')}}</h1>
    @endif
</form>
@endsection
