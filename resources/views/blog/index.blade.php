@extends('main')

@section('title', "| Blog")

@section('content')
	@for ($num = (int)$posts->count(), $i = 0; $i < ceil($num/3); $i++)
		<div class="row">
			<div style="display: none;">
				{{ $k = $i + 1 }}
				@if ($k * 3 > $num)
					{{ $k = $num }}
				@else
					{{ $k = $k * 3 }}
				@endif
			</div>
			@for ($j = (3 * $i); $j < $k; $j++)
				<div class="4u archive-border">
					<article class="post">
		                <div class="post-header">
		                    <h2 style="font-size: 10px;">
		                        <span>
		                            <a href="{{ route('blog.single', $posts[$j]->slug) }}">{{ $posts[$j]->title }}</a>
		                        </span>
		                    </h2>

		                    <div class="bg-category">
		                        <div class="category-name">
		                            {{ $posts[$j]->category->name }}
		                        </div>
		                    </div>
		                </div>

		                <div style="display: block;">
		                    <div class="post-image">
		                        <img style="width: auto; height: auto; max-height: 300px; " src="{{ $posts[$j]->image_path }}">
		                    </div>
		                    <div class="post-entry">
		                    	<p class="post-body">
                        			{!! str_limit(strip_tags($posts[$j]->body), $limit = 100, $end = ' ...') !!}
                        		</p>
		                    </div>
		                    <div class="post-entry">
		                        <p> 
		                            <a class="continue-reading custom" href="{{ route('blog.single', $posts[$j]->slug) }}">Continue Reading
		                                <span class="bar bar-1"></span>
		                                <span class="bar bar-2"></span>
		                                <span class="bar bar-3"></span>
		                                <span class="bar bar-4"></span>
		                            </a>
		                        </p>
		                    </div>
		                </div>

		                <div class="post-bottom">
		                    <ul class="post-info pull-left" data-id="18">
		                        <li><i class="fa fa-clock-o"></i>{{ date('l, F d, Y', strtotime($posts[$j]->created_at)) }}</li>
		                        <li>
		                            <i class="fa fa-comments-o"></i>
		                            <span>{{ $posts[$j]->post_comment_count }} Comments</span>
		                        </li>
		                    </ul>
		                    <ul class="group-share pull-right">
		                        <li><span>Share</span></li>
		                        <li>
		                            <a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url={{ route('blog.single', $posts[$j]->slug) }}"><i class="fa fa-twitter"></i></a>
		                        </li>
		                        <li>
		                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.single', $posts[$j]->slug) }}"><i class="fa fa-facebook"></i></a>
		                        </li>
		                        <li>
		                            <a href="https://plus.google.com/share?url={{ route('blog.single', $posts[$j]->slug) }}"><i class="fa fa-google-plus"></i></a>
		                        </li>
		                        <li>
		                            <a href=""><i class="fa fa-pinterest"></i></a>
		                        </li>
		                        <li>
		                            <a href="mailto:?"><i class="fa fa-envelope-o"></i></a>
		                        </li>
		                    </ul>
		                </div>
		            </article>
				</div>
	        @endfor
		</div>
	@endfor
	
	<div class="6u" style="text-align: center;">
		<div class="text-center">
			{!! $posts->links() !!}
		</div> <!-- text-center -->
	</div>
@stop