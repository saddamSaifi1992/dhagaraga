<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        @include('layouts._partial._head')

    </head>
    <body   @stack('body')>
        @include('layouts._partial._nav')
            @yield('content')
         @include('layouts._partial._footer')
        @stack('script')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript">
            var $ = jQuery.noConflict(); 
            $(document).ready(function() { 
                $(".navbar-toggler").click(function() {
                    $(".navbar-nav").slideToggle("slow"); 
                }); 
                var header = $(".navbar");
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll >= 100 && $(this).width() > 769) {
                        header.addClass("fixed-top");
                    } else {
                        header.removeClass('fixed-top');
                    }
                });    
            });  
             
        </script>
    </body>
</html>
