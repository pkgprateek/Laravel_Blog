@extends('main')

@section('title', "| $post->title")

@section('content')
    <div class="widget Blog col-md-8">
		<article class="post">
			<div class="post-header">
				<h1> {{  $post->title }} </h1>
				<span class="date">{{ date('l, F d, Y', strtotime($post->created_at)) }}</span>
			</div>
			<div class="post-entry inside">
				<div>
					<div>
						<div class="separator" style="clear: both; text-align: center;">
							<img style="width: auto; height: auto; max-height: 700px; max-width: 700px; " src="{{ $post->image_path }}">
						</div>
						<br>
					</div>
					<br>
					<div class="single-post">
						{!! $post->body !!}
					</div>
				</div>
			</div>
			<br><br>
			<hr>

			<div class="entry-meta hidden-print">
				<div class="single-sharing-btns">
					<h3 class="single-sharing-btns-title">Share This Story</h3>
					<ul class="social-share-buttons style-default size-large" data-url="/">
						<li class="facebook" data-service="facebook" data-show="true" title="Share on Facebook">
							<a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.single', $post->slug) }}" target="_blank">
								<i class="fa fa-facebook"></i>
								<label class="hidden-xs">Share on Facebook</label>
							</a>
						</li>
						<li class="twitter" data-service="twitter" data-show="true" title="Share on Twitter">
							<a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url={{ route('blog.single', $post->slug) }}" target="_blank">
								<i class="fa fa-twitter"></i>
								<label class="hidden-xs">Share on Twitter</label>
							</a>
						</li>
						<li class="google-plus" data-service="google-plus" data-show="true" title="Share on Google+">
							<a href="https://plus.google.com/share?url={{ route('blog.single', $post->slug) }}" target="_blank">
								<i class="fa fa-google-plus"></i>
								<label class="hidden-xs">Share on Google+</label>
							</a>
						</li>
					</ul>
				</div>

				<div class="view-count comment-count">
					<strong class="tag-heading">
						<i class="fa fa-eye"></i>Views:
					</strong>
					<span>{{ $post->post_view_count }}, </span>
					<strong class="tag-heading">
						<i class="fa fa-comments"></i>Comments:
					</strong>
					<span>{{ $post->post_comment_count }}</span>
				</div>
			</div>

			<div class="blog-pager" id="blog-pager">
				@if ($previous != null)			
					<span id="blog-pager-newer-link">
						<a class="blog-pager-newer-link" href="{{ route('blog.single', $previous->slug) }}" title="Newer Post">
							<h4><b>← Previous Story</b></h4>
						</a>
					</span>
				@endif

				@if ($next != null)
					<span id="blog-pager-older-link">
						<a class="blog-pager-older-link" href="{{ route('blog.single', $next->slug) }}" title="Older Post">
							<h4><b>Next Story →</b>
						</a>
					</span>
				@endif
			</div>
		</article>

		<section class="col-md-8">
			<h4 class="title">Add a Comment</h4>
			{!! Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) !!}
				
				{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Your Name']) }}

				{{ Form::textarea('content', null, ['class' => 'form-control form-spacing-top', 'placeholder' => 'Comment Here..', 'rows' => '5']) }}

				{{ Form::submit('Comment', array('class' => 'btn btn-primary form-spacing-top')) }}

			{!! Form::close() !!}
		</section>
		<br>

		<section class="col-md-10 col-mod-offset-1">
			@foreach ($comments as $comment)
				<div>
					<p>{{ $comment->name }} says...</p>
					<blockquote>{{ $comment->content }}</blockquote>
				</div>
			@endforeach
		</section>
		
		@if ($comments->count() > 9)
			<div class="col-md-10 col-mod-offset-1 more-comments">
				<a href="{{ $comments->nextPageUrl() }}">More Comments</a>
			</div>
		@endif
    </div>
@stop

@section('sidebar')
	@include('partials._sidebar')
@stop