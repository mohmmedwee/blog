<!DOCTYPE html>
<html lang="en">
<head>
@include('parsials._heade')
</head>
<body>
@include('parsials._navbar')


<div class="container"> <!-- start of container -->

    @yield('content')

</div> <!-- end of container -->


@include('parsials._footer')



@include('parsials._script')


@yield('script')
</body>
</html>