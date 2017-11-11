<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Awesome blog</title>
    @include('layouts.css')

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    @include('layouts.nav')
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-md-8">

            @yield('content')

        </div>

            @yield('sidebar_widgets')


    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
@include('layouts.footer')
<!-- /.container -->
</footer>
@include('layouts.js')
</body>
</html>