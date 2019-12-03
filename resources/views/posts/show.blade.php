@extends ('layouts.master')


@section('content')
	
	<div class="blog-post">
  
	    <h2 class="blog-post-title">
	      
	      	{{ $post->title }}

	    </h2>

	    <p class="blog-post-meta">


	    	<i><strong>{{ $post->user->name }}</strong></i> on
	    	{{ $post->created_at->toFormattedDateString() }}

	    </p>

	    {{ $post->body }}

		<br><br>Tags:
		@if(count($post->tags))
			@foreach($post->tags as $tag)
				<a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a>
			@endforeach
		@endif


	    <br><hr><br>

	    <div class="comments">

	    	<ul class="list-group">

		    	@foreach($post->comments as $comment)

					<li class="list-group-item">
						<i>{{ $comment->created_at->diffForHumans() }}&nbsp</i>
						<strong>{{ $comment->user->name }}:&nbsp</strong>
	                	{{ $comment->body }}
	                </li>
		    	@endforeach

	    	</ul>
	    </div>
	    <br>

	    <div class="card">

	    	<div class="card-block">
	  			<form action="{{ $post->id }}/comments" method="post">
	  				{{ csrf_field() }}

	  				<div class="form-group">
	  					<textarea name="body" placeholder="Your comment here.." class="form-control" required></textarea>
	  				</div>

	  				<div class="form-group">
	  					<button type="submit" class="btn btn-primary">Add Comment</button>
	  				</div>

	  			</form>
	    	</div>

	    	@include('layouts.formerrors')

	    </div>

	    <br><hr><br>

	</div>

@endsection

