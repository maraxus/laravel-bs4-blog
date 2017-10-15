@extends('layout-master')

@section('content')

      @foreach($posts as $post)
      	@include('posts.partials.show')
      @endforeach
      @if(count($posts) == 0)
      	<div class="blog-post">
      		<p>Sem posts para exibir</p>
      	</div>
      @endif

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>
      
@stop