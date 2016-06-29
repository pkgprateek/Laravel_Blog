<!-- Header -->
<div id="header">
    <div class="container"> 

        
        <!-- Logo -->
        <div id="logo">
            <h1><a href="/"><img id="logo-img" src="http://tnine.io/img/logo_web-01.png"></a></h1>
            <span>Welcome to Tnine Blog</span>
        </div>
        
        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="{{ Request::is('/') ? "active" : ""}}"><a href="/">Home</a></li>
                <li class="{{ Request::is('blog') ? "active" : ""}}"><a href="/blog">Archive</a></li>
                @if (Auth::check())
                    <li class="{{ Request::is('posts/create') ? "active" : ""}}"><a href="{{ route('posts.create') }}">Create Post</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><span class="caret"></span> Hello {{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('posts.index') }}">Posts</a></li>
                            <li><a href="{{ route('categories.index') }}">Category</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <a href="{{ route('login') }}">LOGIN</a>
                @endif
            </ul>
        </nav>
    </div>
</div>