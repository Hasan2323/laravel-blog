<div class="col-sm-8 offset-sm-1 blog-sidebar">
	
	<div class="sidebar-module sidebar-module-inset">
		
		<h4>About</h4>
		<p>hello hello hello hello hello hello.</p>

	</div>

	<div class="sidebar-module">
		
		<h4>Archives</h4>

		<ol class="list-unstyled">
			
			@foreach($archives as $stats)
				<li>
					<a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
						{{ $stats['month'].', '.$stats['year'].'('.$stats['published'].')' }}
					</a> 
				</li>
			@endforeach

		</ol>

		<h4>Tags</h4>

		<ol class="list-unstyled">

			@foreach($tags as $tag)
				<li>
					<a href="/posts/tags/{{ $tag }}">
						{{ $tag }}
					</a>
				</li>
			@endforeach

		</ol>

	</div>

</div>