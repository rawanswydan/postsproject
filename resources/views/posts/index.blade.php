<h1>Posts</h1>
   <a href="{{ route('posts.create') }}">Add Post</a>
   <ul>
       @foreach ($posts as $post)
           <li>
               {{ $post->title }} - {{ $post->description }}
               <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
               <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                   @csrf
                   @method('DELETE')
                   <button type="submit">Delete</button>
               </form>
           </li>
       @endforeach
   </ul>

   @if ($posts->isEmpty())
       <p>No posts found.</p>
   @endif