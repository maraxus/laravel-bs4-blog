<div class="blog-post">
  <a href="/posts/{{ $post->id }}"><h2 class="blog-post-title">{{ $post->title }}</h2></a>
  <p class="blog-post-meta">{{ $post->created_time() }} by <a href="/author/{{ $post->author->id }}/posts">{{ $post->author->name }}</a></p>
  {{ $post->body }}
</div><!-- /.blog-post -->