@extends('main')

@section('title', '| Home')

@section('content')
    <div class="widget Blog col-md-8">
    <!-- Posts Recent top 3 -->
        @foreach ($posts as $post)
            <article class="post">
                <div class="post-header">
                    <h2>
                        <span>
                            <a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a>
                        </span>
                    </h2>

                    <div class="bg-category">
                        <div class="category-name">
                            <a href="">{{$post->category->name}}</a>
                        </div>
                    </div>
                </div>

                <div style="display: block;">
                    <div class="post-image">
                        <img style=" max-height: 600px; width: auto; height: auto; " src="{{ $post->image_path }}">
                    </div>
                    <br>
                    <div class="post-entry">
                        <p class="post-body">
                        {!! str_limit(strip_tags($post->body), $limit = 600, $end = ' ...') !!}
                        </p>
                    </div>
                    <div class="post-entry">
                        <p> 
                            <a class="continue-reading custom" href="{{ route('blog.single', $post->slug) }}">Continue Reading
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
                        <li><i class="fa fa-clock-o"></i>{{ date('l, F d, Y', strtotime($post->created_at)) }}</li>
                        <li>
                            <i class="fa fa-comments-o"></i>
                            <span>{{ $post->post_comment_count }} Comments</span>
                        </li>
                    </ul>
                    <ul class="group-share pull-right">
                        <li><span>Share</span></li>
                        <li>
                            <a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url={{ route('blog.single', $post->slug) }}"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.single', $post->slug) }}"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/share?url={{ route('blog.single', $post->slug) }}"><i class="fa fa-google-plus"></i></a>
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
        @endforeach
        
        @if ($posts->count() > 2)
            <div class="pagination">
                <div class="older">
                    <a href="{{ $posts->nextPageUrl() }}">
                        <span class="pager">Older Stories</span>
                        <span class="post-nav-icon"><i class="fa fa-chevron-right"></i></span>
                    </a>
                </div>
            </div>
        @endif
    </div>
@stop

@section('sidebar')
    @include('partials._sidebar')
@stop