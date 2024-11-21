<form action="">
    <input type="text" name="title" value="{{ $post->title}}">
    <textarea name="description" id="" cols="30" rows="10">{{ $post->description }}</textarea>
    <img src="/images/{{$post->image}}"  class="img-fluid">




    <div class="card">
        <div class="row">
                <div class="card">
                    <img src="images/{{$post->image}}"  class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title text-success text-center">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{route('posts.show',$post->id)}}" class="m-2 btn btn-primary">Show</a>
                            <a href="{{route('posts.edit')}}" class="m-2 btn btn-secondary">Edit</a>
                            <a href="{{route('posts.delete')}}" class="m-2 btn btn-danger">Delete</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
        </div>
    </div>




</form>
