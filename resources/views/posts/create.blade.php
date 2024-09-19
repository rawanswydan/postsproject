<h1>Add Post</h1>
   <form action="{{ route('posts.store') }}" method="POST">
       @csrf
       <label>Title:</label>
       <input type="text" name="title" required>
       <br>
       <label>Description:</label>
       <textarea name="description" required></textarea>
       <br>
       <button type="submit">Save</button>
   </form>