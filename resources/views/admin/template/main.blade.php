<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Pligins -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/admin/adminlte.min.css') }}">
    @yield('style')

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini ">
<div class="wrapper">

    @include('admin.template.menu')

    @yield('content')

    @include('admin.template.footer')

</div>

<!-- Plugins -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Admin -->
<script src="{{ asset('js/admin/adminlte.min.js') }}"></script>

<!-- JS -->
<script src="{{ asset('js/admin/demo.js') }}"></script>
@yield('script')

</body>
</html>
