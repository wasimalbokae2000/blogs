<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 <form action="{{ route("posts.update") }}" enctype="multipart/form-data" method="POST">
    @method("POST")
    @csrf
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h5 class="card-title"> <input type="text" name="title" value="{{ $post->title}}"></h5>
                    <textarea class="card-text" name="description" id="" cols="30" rows="10">{{ $post->description }}</textarea>
                </div>
                <div class="col-6">
                    <img src="/images/{{$post->image}}"  class="w-100" alt="...">
                </div>
            </div>

        </div>
    <input type="file" name="image">
    <br>
    <button type="submit">Edit</button>
</div>

</form>
