<div class="blog-post">
  
    <h2 class="blog-post-title">
      
      <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>

    </h2>

    <p class="blog-post-meta">

    	<i><strong>{{ $post->user->name }}</strong></i> on
    	{{ $post->created_at->toFormattedDateString() }}

	 </p>

    {{ $post->body }}

    <br><hr><br>

</div>