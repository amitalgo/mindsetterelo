<!DOCTYPE html>
<html>

<head>
    @include('admin/includes.head');
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
@include('admin/includes.topbar')
<!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

@include('admin/includes.leftsidebar')
<!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings</button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#">Dropdown One</a>
                                <a class="dropdown-item" href="#">Dropdown Two</a>
                                <a class="dropdown-item" href="#">Dropdown Three</a>
                                <a class="dropdown-item" href="#">Dropdown Four</a>
                            </div>
                        </div>

                        <h4 class="page-title">@yield('page_title')</h4>
                        <p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
                    </div>
                </div>
        @section('body')
        @show
            </div>
        </div> <!-- content -->

        <footer class="footer text-right">
            &copy; 2016 - 2017. All rights reserved.
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
{{--    @include('admin/includes.rightsidebar')--}}
<!-- /Right-bar -->

</div>
<!-- END wrapper -->



@include('admin/includes.footerjs')

</body>

</html>