@extends('main')

@section('title', "| Blog")

<br><br><br><br>

@section('content')
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>BLOG</h1>
		</div>
	</div>

	@foreach($posts as $post)
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>{{ $post->title }}</h2>
			<h5>Published: {{ $post->created_at->diffForHumans() }}</h5>

			<p>{{ str_limit($post->body, $limit = 300, $end = ' ...') }}</p>

			<a href="{{ route('blog.single', $post->id) }}" class="btn btn-primary">Read More</a>
			<hr class="featurette-divider">
		</div>
	</div>
	@endforeach

	<div class="col-md-12">
		<div class="text-center">
			<p>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</p>
			{!! $posts->links() !!}
		</div> <!-- text-center -->
	</div>
@stop