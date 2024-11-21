<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<form action="">

    <img src="/images/{{$post->image}}"  class="img-fluid">




    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> <input type="text" name="title" value="{{ $post->title}}"></h5>
          <textarea class="card-text" name="description" id="" cols="30" rows="10">{{ $post->description }}</textarea>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>

</form>
