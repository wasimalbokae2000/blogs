<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<form action="">
    <div class="card mb-3">
        <div class="card-body">
            <img src="/images/{{$post->image}}"  class="img-fluid" alt="...">
            <h5 class="card-title"> <input type="text" name="title" value="{{ $post->title}}"></h5>
            <textarea class="card-text" name="description" id="" cols="30" rows="10">{{ $post->description }}</textarea>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <input type="file" name="image">
    <br>
    <button type="submit">Edit</button>
</form>
