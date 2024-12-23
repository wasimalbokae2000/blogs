<form action="{{ route("login")}}" method="POST">
    @csrf
    <input type="email" name="email" >
    <input type="password" name="password">
    <button type="submit">send</button>
    @if(@session('error'))
    <h1>  {{session('error')}}</h1>
    @endif

</form>




<form>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
