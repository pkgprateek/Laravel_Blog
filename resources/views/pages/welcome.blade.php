@extends('main')

@section('title', '| Home')

@section('stylesheets')
    {!! Html::style('css/carousalstyle.css') !!}
@stop

@section('carousal')
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Items ===============================-->
        <div class="carousel-inner" role="listbox">

         @foreach($posts as $post)
            <div @if ($posts->first()->id == $post->id)
                class="item active"
            @else
                class="item"
            @endif>
                <img src="https://pixabay.com/static/uploads/photo/2016/05/21/14/21/wood-1406895_960_720.jpg" alt="{{ $post->title }}">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>{{ $post->title }}</h1>
                        <p>{{ str_limit($post->body, $limit = 250, $end = ' ...') }}</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ route('blog.single', $post->slug) }}" role="button">Read more</a></p>
                    </div>
                </div>
            </div>
        @endforeach
        
        </div>

        <!-- left & right nav ===============================-->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- carousal slide -->
    
@stop

 @section('content')
    <hr class="featurette-divider">
    <div class="container-posts col-md-8">
        @foreach ($posts as $post)
            <div class="posts row featurette">
                <div class="col-md-9">
                    <h2 class="featurette-heading">{{ $post->title }}</h2>
                    <p class="lead">{{ str_limit($post->body, $limit = 250, $end = ' ...') }}</p>
                    <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read More</a>
                </div>
                <div class="post-image col-md-3">
                    <br>
                    <img class="featurette-image img-responsive center-block" src="https://placeholdit.imgix.net/~text?txtsize=28&bg=0099ff&txtclr=ffffff&txt=300%C3%97300&w=300&h=300&fm=png" alt="Generic placeholder image">
                </div>
            </div>
            <br>
            <hr class="featurette-divider">
        @endforeach
    </div> <!-- container-posts -->

@stop

@section('sidebar')
    <div class="trending-post col-md-2 col-md-offset-1">
        <h2 class="featurette-heading">Trending</h2>
    </div>
@stop