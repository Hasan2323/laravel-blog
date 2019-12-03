<!-- <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>My Blog</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
</div> -->

 
	
  	<div class="container">
  		
      <nav class="nav Blog-nav">

     			<a class="nav-link active" href="/">Homee</a>

     			<a class="nav-link" href="/">Posts</a>

     			@if(Auth::check())
            		<a class="nav-link" href="/posts/create">Create Post</a>
            		<a class="nav-link" href="/logout">Logout</a>
     				<a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
     			@else
            		<a class="nav-link" href="/login">Login</a>
           		    <a class="nav-link ml-auto" href="/register">Register</a>
     			@endif

  		</nav>

  	</div>


