@foreach($posts as $post)
	@include('posts.partials.show')
@endforeach
@if(count($posts) == 0)
	<div class="blog-post">
		<p>Sem posts para exibir</p>
	</div>
@endif
<nav class="blog-pagination">
@if($posts->hasMorePages())
  <a class="btn btn-outline-primary" href="{{ $posts->nextPageUrl() }}">Older</a>
@endif
  <a class="btn btn-outline-secondary {{ $posts->currentPage() === 1  ? 'disabled' : '' }}" href=" {{ $posts->previousPageUrl() }} ">Newer</a>
</nav>