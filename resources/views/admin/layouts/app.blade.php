<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') </title>
    @include('admin.layouts.header')
</head>

<body class="skin-blue   fixed-layout">

    <div id="main-wrapper">
        @include('admin.layouts.nav')
        <div class="page-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    @include('admin.layouts.footer')
    @include('admin.layouts.script')
    @yield('js')
</body>

</html>