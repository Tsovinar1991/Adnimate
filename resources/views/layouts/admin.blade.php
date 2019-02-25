<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="{{asset("items/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset("items/fontawesome-free/css/all.min.css" )}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{asset("items/datatables/dataTables.bootstrap4.css")}}" rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="{{asset("css/sb-admin.css")}}" rel="stylesheet">

    @yield('css')

    <style>
        #wrapper a.nav-link:hover i:before {
            color: #65a9c3;
        }

        #wrapper a.nav-link i:before {
            color: #167888;
        }

    </style>

</head>

<body id="page-top">

@include('include.navbar')

<div id="wrapper">
    @include('include.sidebar')
    <div id="content-wrapper">
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{url('admin')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">@yield('page')</li>
            </ol>

            @include('include.messages')
            @yield('content')


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © SHINE 2018</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('items/jquery/jquery.min.js')}}"></script>
<script src="{{asset('items/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('items/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Page level plugin JavaScript-->
{{--<script src="{{asset('items/chart.js/Chart.min.js')}}"></script>--}}
<script src="{{asset('items/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('items/datatables/dataTables.bootstrap4.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin.min.js')}}"></script>

<!-- Demo scripts for this page-->
{{--<script src="{{asset('js/demo/datatables-demo.js')}}"></script>--}}
{{--<script src="{{asset('js/demo/chart-area-demo.js')}}"></script>--}}
@yield('js')
</body>

</html>

