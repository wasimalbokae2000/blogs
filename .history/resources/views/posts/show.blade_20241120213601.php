<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<form action="">
    <input type="text" name="title" value="{{ $post->title}}">
    <textarea name="description" id="" cols="30" rows="10">{{ $post->description }}</textarea>
    <img src="/images/{{$post->image}}"  class="img-fluid">




    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>

</form>