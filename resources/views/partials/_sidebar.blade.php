<div class="sidebar-wrapper col-md-4">
    <div class="sidebar">

        <div class="widget Connect">
            <h2 class="title">Connect With Us</h2>
            <div class="widget-content">
                <ul class="clearfix" id="socialbox">
                    <li>
                        <a class="bl_icon_facebook" data-title="Facebook" href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i><span class="social-type">Facebook</span></a>
                    </li>
                    <li>
                        <a class="bl_icon_twitter" data-title="Twitter" href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i><span class="social-type">Twitter</span></a>
                    </li>
                    <li>
                        <a class="bl_icon_googleplus" data-title="Google+" href="//plus.google.com" target="_blank"><i class="fa fa-google-plus"></i><span class="social-type">Google</span></a>
                    </li>
                    <li>
                        <a class="bl_icon_linkedin" data-title="Linkedin" href="//www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i><span class="social-type">Linkedin</span></a>
                    </li>
                    <li>
                        <a class="bl_icon_youtube" data-title="Youtube" href="//www.youtube.com" target="_blank"><i class="fa fa-youtube"></i><span class="social-type">Youtube</span></a>
                    </li>
                    <li>
                        <a class="bl_icon_instagram" data-title="Instagram" href="//www.instagram.com" target="_blank"><i class="fa fa-instagram"></i><span class="social-type">Instagram</span></a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>

        <div class="widget PopularPosts">
            <h2>Popular Posts</h2>
            <div class="widget-content popular-posts">
                <ul>
                    @foreach ($popular_posts as $popular)
                        <li>
                            <div class="item-content">
                                <div class="item-thumbnail">
                                   <img border="0" height="72" width="72" src="{{ $popular->image_path }}">
                                </div>
                                <div class="item-title">
                                    <a href="{{ route('blog.single', $popular->slug) }}">{{$popular->title}}</a>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="widget Label">
            <h2>Categories</h2>
            <div class="widget-content">
                <ul>
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('categories.posts', $category->name) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>