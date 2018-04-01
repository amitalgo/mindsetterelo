<!DOCTYPE html>
<html>

<head>
    @include('frontend/includes.head')
    <title>@yield('title')</title>
</head>


<body class="tg-home tg-login">

<!-- Begin page -->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">

@include('frontend/includes.header')

    @section('breadcrumb')
        @show

        @section('body')
        @show

    @include('frontend/includes.footerjs')

</div>
<!-- END wrapper -->

</body>

</html>