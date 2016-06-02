@extends('main')

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

        <!-- Item 1 ===============================-->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="https://pixabay.com/static/uploads/photo/2016/05/21/14/21/wood-1406895_960_720.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Title 1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">Read more</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item 2 ===============================-->
            <div class="item">
                <img class="second-slide" src="https://pixabay.com/static/uploads/photo/2016/05/21/14/21/wood-1406895_960_720.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Title 2</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">Read more</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Item 3 ===============================-->
            <div class="item">
                <img class="third-slide" src="https://pixabay.com/static/uploads/photo/2016/05/21/14/21/wood-1406895_960_720.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Title 3</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">Read more</a>
                        </p>
                    </div>
                </div>
            </div> 

            <!-- Item 4 ===============================-->
            <div class="item">
                <img class="forth-slide" src="https://pixabay.com/static/uploads/photo/2016/05/21/14/21/wood-1406895_960_720.jpg" alt="Forth slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Title 4</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">Read more</a>
                        </p>
                    </div>
                </div>
            </div> 
            
            <!-- Item 5 ===============================-->
            <div class="item">
                <img class="fifth-slide" src="https://pixabay.com/static/uploads/photo/2016/05/21/14/21/wood-1406895_960_720.jpg" alt="Fifth slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Title 5</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">Read more</a>
                        </p>
                    </div>
                </div>
            </div>
            
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

        <!-- Post 1===============================-->
        <div class="posts row featurette">
            <div class="col-md-9">
                <h2 class="featurette-heading">Post Title</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum neque unde inventore rem, sequi, voluptatem quod, modi ipsum assumenda vero nesciunt mollitia quos error impedit quam illo officiis quisquam. Eligendi.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post-image col-md-3">
                <br>
                <img class="featurette-image img-responsive center-block" src="https://placeholdit.imgix.net/~text?txtsize=28&bg=0099ff&txtclr=ffffff&txt=300%C3%97300&w=300&h=300&fm=png" alt="Generic placeholder image">
            </div>
        </div>
        <br>
        <hr class="featurette-divider">

        <!-- Post 2===============================-->
        <div class="posts row featurette">
            <div class="col-md-9">
                <h2 class="featurette-heading">Post Title</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum neque unde inventore rem, sequi, voluptatem quod, modi ipsum assumenda vero nesciunt mollitia quos error impedit quam illo officiis quisquam. Eligendi.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post-image col-md-3">
                <br>
                <img class="featurette-image img-responsive center-block" src="https://placeholdit.imgix.net/~text?txtsize=28&bg=0099ff&txtclr=ffffff&txt=300%C3%97300&w=300&h=300&fm=png" alt="Generic placeholder image">
            </div>
        </div>
        <br>
        <hr class="featurette-divider">

        <!-- Post 3===============================-->
        <div class="posts row featurette">
            <div class="col-md-9">
                <h2 class="featurette-heading">Post Title</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum neque unde inventore rem, sequi, voluptatem quod, modi ipsum assumenda vero nesciunt mollitia quos error impedit quam illo officiis quisquam. Eligendi.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post-image col-md-3">
                <br>
                <img class="featurette-image img-responsive center-block" src="https://placeholdit.imgix.net/~text?txtsize=28&bg=0099ff&txtclr=ffffff&txt=300%C3%97300&w=300&h=300&fm=png" alt="Generic placeholder image">
            </div>
        </div>
        <br>
        <hr class="featurette-divider">

        <!-- Post 4===============================-->
        <div class="posts row featurette">
            <div class="col-md-9">
                <h2 class="featurette-heading">Post Title</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum neque unde inventore rem, sequi, voluptatem quod, modi ipsum assumenda vero nesciunt mollitia quos error impedit quam illo officiis quisquam. Eligendi.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post-image col-md-3">
                <br>
                <img class="featurette-image img-responsive center-block" src="https://placeholdit.imgix.net/~text?txtsize=28&bg=0099ff&txtclr=ffffff&txt=300%C3%97300&w=300&h=300&fm=png" alt="Generic placeholder image">
            </div>
        </div>
        <br>
        <hr class="featurette-divider">

        <!-- Post 5===============================-->
        <div class="posts row featurette">
            <div class="col-md-9">
                <h2 class="featurette-heading">Post Title</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum neque unde inventore rem, sequi, voluptatem quod, modi ipsum assumenda vero nesciunt mollitia quos error impedit quam illo officiis quisquam. Eligendi.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post-image col-md-3">
                <br>
                <img class="featurette-image img-responsive center-block" src="https://placeholdit.imgix.net/~text?txtsize=28&bg=0099ff&txtclr=ffffff&txt=300%C3%97300&w=300&h=300&fm=png" alt="Generic placeholder image">
            </div>
        </div>
        <br>
    </div> <!-- container-posts -->

@stop

@section('sidebar')
    <div class="trending-post col-md-2 col-md-offset-1">
        <h2 class="featurette-heading">Trending</h2>
    </div>
@stop