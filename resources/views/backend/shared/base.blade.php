<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('backend.partials.styles')

    <title>@yield('title') | Ecommerce</title>
</head>

<body>


    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

        @include('backend.shared.nav')

        @include('backend.shared.slidebar')

        @yield('content')

    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->


    <!-- Optional JavaScript -->
    @include('backend.partials.scripts')

</body>

</html>
