<h1>Edit Post</h1>
   <form action="{{ route('posts.update', $post->id) }}" method="POST">
       @csrf
       @method('PUT')
       <label>Title:</label>
       <input type="text" name="title" value="{{ $post->title }}" required>
       <br>
       <label>Description:</label>
       <textarea name="description" required>{{ $post->description }}</textarea>
       <br>
       <button type="submit">Update</button>
   </form>