<form action="{{ route("posts.store") }}" enctype="multipart/form-data" method="POST">
    @method("POST")
    @csrf
    <input type="text" name="title">
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <input type="file" name="image">
    <button type="submit">Add</button>
</form>