<!DOCTYPE html>
<html>
<title>@yield('pageTitle') The Language Academy</title>
@include('layouts.header')

<body>
    @include('layouts.navbar')
    @yield('content')

    @include('layouts.footer')

    @yield('js')

    <script>
        $("#goTop").click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                return false;   
            });
            $(window).scroll(function () {
            // alert();
                if ($(window).scrollTop() > 50) {
                    $("#goTop").show();
                } else {
                    $("#goTop").hide()
                }
            });
    </script>
</body>

</html>