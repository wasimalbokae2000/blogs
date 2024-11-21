<form action="">
    <input type="text" name="title" value="{{ $post->title}}">
    <textarea name="description" id="" cols="30" rows="10">{{ $post->description }}</textarea>
    <img src="/images/{{$post->image}}" alt="">
</form>
