<!DOCTYPE html>
<html>
<head>

    @include('admin.layouts.head-tag')
    @yield('head-tag')
</head>


<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('admin.layouts.navbar')



    @include('admin.layouts.sidebar')


    @yield('content')

    

    @include('admin.layouts.footer')


</div>
<!-- ./wrapper -->


@include('admin.layouts.script')
@yield('script')
</body>
</html>
