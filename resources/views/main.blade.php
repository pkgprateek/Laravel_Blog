<!DOCTYPE html>
<html lang="en">

    <head>

        @include('partials._head')

    </head>

    <body>

        @include('partials._nav')

        @yield('carousal')

        <div class="container">

            @yield('content')

            @yield('sidebar')

        </div> <!-- container -->

        @include('partials._footer')

        @include('partials._javascript')

        @yield('scripts')

    </body>
    
</html>