<!-- Main Footer -->
<section class="footer-menu">
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">

                    {{-- <a href="{{ url('admin/home') }}" class="navbar-brand">
                        <img src="{{ url('public/assets/logo/logo.png') }}" alt="AdminLTE Logo"
                            class="img-fluid">
                    </a> --}}

                    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> --}}
                    {{-- <div class="" id="navbarSupportedContent"> --}}
                    <ul class="navbar-nav">
                        <li class="nav-item {{ request()->routeIs('admin.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <a class="nav-link" aria-current="page" href="{{ url('home') }}">Dashboard</a>
                        </li>
                        @if (Auth::user()->role_id == 1)
                            <li class="nav-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <a class="nav-link" aria-current="page" href="{{ route('users.index') }}">Users</a>
                            </li>
                        @endif
                        <li class="nav-item {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <a class="nav-link" aria-current="page" href="{{ route('profile.edit') }}">Profile</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('team.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-friends"></i>
                            <a class="nav-link" aria-current="page" href="{{ route('team.qr') }}">My Team</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('withdraw.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-wallet"></i> <!-- Changed to Wallet Icon -->
                            <a class="nav-link" aria-current="page" href="{{ route('withdraw') }}">Withdraw</a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('deposit') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-piggy-bank"></i> <!-- Changed to Piggy Bank Icon -->
                            <a class="nav-link" aria-current="page" href="{{ route('deposit') }}">Deposit</a>
                        </li>
                    </ul>
                    {{-- </div> --}}
                </div>
            </nav>
        </div>
    </div>
</section>
{{-- <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
    class="float-whatsapp" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a> --}}
<a href="https://t.me/t_Emma21" class="float-telegram" target="_blank">
    <i class="fa fa-telegram my-float"></i>
</a>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ url('public/admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ url('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('public/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ url('public/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('public/admin/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ url('public/admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ url('public/admin/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('public/admin/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ url('public/admin/dist/js/pages/dashboard2.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<!-- Summernote -->
<script src="{{ url('public/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- CodeMirror -->
<script src="{{ url('public/admin/plugins/codemirror/codemirror.js') }}"></script>
<script src="{{ url('public/admin/plugins/codemirror/mode/css/css.js') }}"></script>
<script src="{{ url('public/admin/plugins/codemirror/mode/xml/xml.js') }}"></script>
<script src="{{ url('public/admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

{{-- slider cdn --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- AdminLTE for demo purposes -->
<script src="{{ url('public/admin/dist/js/demo.js') }}"></script>
<!-- Custom js -->
@include('admin.ajax')

@yield('script')
<script>
    @if (Session::has('success'))
        alert("{{ session('success') }}");
    @endif
    @if (Session::has('error'))
        alert("{{ session('error') }}");
    @endif
</script>


<script>
    $('.banner-slides').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</body>

</html>
