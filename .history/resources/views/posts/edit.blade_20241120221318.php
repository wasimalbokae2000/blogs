<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 <form action="{{ route("posts.update") }}" enctype="multipart/form-data" method="POST">
    @method("POST")
    @csrf
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title"> <input type="text" name="title" value="{{ $post->title}}"></h5>
            <textarea class="card-text" name="description" id="" cols="30" rows="10">{{ $post->description }}</textarea>
            <img src="/images/{{$post->image}}"  class="img-fluid" alt="...">
        </div>
    <input type="file" name="image">
    <br>
    <button type="submit">Edit</button>
</div>

</form>
