<!DOCTYPE html>
<html lang="en">
    <head>

        @include('partials._head')

    </head>
    <body>

        @include('partials._nav')

        <!-- Main -->
        <div id="main">
            <div class="container">
                @include('partials._messages')
                    @yield('content')
                
                    @yield('sidebar')
            </div>
        </div>

        @include('partials._footer')

        @include('partials._javascript')

        @yield('scripts')
        
    </body>
</html>