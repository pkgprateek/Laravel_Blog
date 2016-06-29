<!DOCTYPE html>
<html>
<head>

<style type="text/css">
	body {
		text-decoration: none;
		text-align: center;
	}

	.post {
		margin-bottom: 80px;
	}
	article {
		display: block;
		margin-bottom: -20px;
	}
	.post-header {
		margin-bottom: 15px;
		text-align: center;
	}
	.post-header h2 a {
		text-decoration: none;
		text-transform: uppercase;
		color: #222;
		margin: 0 0 0 .38em;
		font-size: 1.5em;
		line-height: 120%;
		color: #2e2e2e;
	}
	.post-header .bg-category {
	    width: 100%;
	    overflow: hidden;
	    text-align: center;
	    margin: 20px auto 30px;
	    height: auto;
	    line-height: 12px;
	}
	.post-header .category-name {
	    font-size: 0.9em;
	    padding: 10px 0px 5px;
	    letter-spacing: 0.25em;
	    font-weight: 600;
	    text-transform: uppercase;
	    line-height: 0;
	    text-align: center;
	    display: table;
	    margin: 0 auto;
	}
	.category-name a {
	    padding: 0 12px 0 12px;
	    font-weight: 400;
	    font-style: normal;
	    font-family: Open Sans;
	    color: #000000;
	    text-decoration: none;
	}
	.post-header .bg-category .category-name::before, 
	.post-header .bg-category .category-name::after {
	    display: table-cell;
	    content: '';
	    width: 50px;
	    height: 0;
	    border-top: 1px solid #222;
	}

	.post-entry, .post-info {
	    text-align: justify;
	}
	.post-entry p {
		margin-right: 20px;
		text-align: center;
	}
	.post-entry a.continue-reading {
		letter-spacing: 2px;
	    font-size: 10px;
	    padding: 4px 15px;
	    font-family: 'Montserrat';
	    line-height: 38px;
	    text-transform: uppercase;
	    background: transparent;
	    text-decoration: none;
	}
	a.custom {
	    position: relative;
	    display: inline-block;
	    padding: 15px 38px;
	    margin: 20px 0px 5px 0;
	    font-size: 0.92em;
	    font-weight: 700;
	    letter-spacing: 0.15em;
	    text-transform: uppercase;
	}
	a.custom span.bar {
	    position: absolute;
	    background: #C4191F;
	}
	a.custom span.bar-1 {
	    top: 0;
	    right: 40px;
	    left: 0;
	    height: 2px;
	}
	a.custom span.bar-2 {
	    top: 0;
	    right: 0;
	    bottom: 0;
	    width: 2px;
	}
	a.custom span.bar-3 {
	    right: 0;
	    bottom: 0;
	    left: 40px;
	    height: 2px;
	}
	a.custom span.bar-4 {
	    top: 0;
	    bottom: 0;
	    left: 0;
	    width: 2px;
	}

	.post-bottom {
	    display: inline-block;
	    width: 100%;
	    border-top: 1px solid #B40000;
	    padding: 13px 0;
	    margin-top: 30px;
	}
	.pull-left {
		float: left;
	}
	.post-info li {
	    display: inline-block;
	    font-size: 12px;
	    letter-spacing: 0.8px;
	    font-family: Istok Web,sans-serif;
	    color: #171a1b;
	    text-transform: uppercase;
	    margin-right: 20px;
	}
	.post-info .fa {
	    font-size: 16px;
	    color: #101010;
	    margin-right: 4px;
	    vertical-align: middle;
	}
	.post-info li a {
		text-decoration: none;
	    color: #5d5d5d;
	}
</style>

</head>
<body>
<div class="widget Blog col-md-8 col-md-offset-2">
            <article class="post">
                <div class="post-header">
                    <h2>
                        <span>
                            <a href="{{ route('blog.single', $slug) }}">{{ $title }}</a>
                        </span>
                    </h2>
                </div>

                <div class="bg-category">
                    <div class="category-name">
                        <a href="">{{$category}}</a>
                    </div>
                 </div>

                <div style="display: block;">
                    <div class="post-image">
                        <img style=" max-height: 400px; width: auto; height: auto; margin-top: 20px;" src="{{ $image_path }}">
                    </div>
                    <br>
                    <div class="post-entry">
                        <p class="post-body">
                        {!! str_limit(strip_tags($body), $limit = 600, $end = ' ...') !!}
                        </p>
                    </div>
                    <div class="post-entry">
                        <p> 
                            <a class="continue-reading custom" href="{{ route('blog.single', $slug) }}">Continue Reading
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
                        <li><i class="fa fa-clock-o"></i>{{ date('l, F d, Y', strtotime($created_at)) }}</li>
                    </ul>
                </div>
            </article>
    </div>
</body>
</html>