
<!DOCTYPE html>
@include('layouts.header')
<html lang="fa">
<body>

    <div class="wrapper">

        <!-- Start header -->
        @include('partials.navbar')
        <!-- End header -->

        <!-- Start main-content -->
        @yield('content')
        <!-- End main-content -->

        <!-- Start footer -->
        @include('layouts.footer')
        <!-- End footer -->

    </div>

    <!-- colorPanel -->
    <div id="colorswitch-option">
        <button><i class="mdi mdi-settings"></i></button>
        <ul>
            <li class="active" data-path="{{asset('assets/css/colors/default.css"><span style="background-color: #f7858d;')}}"></span></li>
            <li data-path="{{asset('assets/css/colors/amber-color.css"><span style="background-color: #ffab00;')}}"></span></li>
            <li data-path="{{asset('assets/css/colors/blue-color.css"><span style="background-color: #2979ff;')}}"></span></li>
            <li data-path="{{asset('assets/css/colors/blue-grey-color.css"><span style="background-color: #607d8b;')}}"></span></li>
            <li data-path="{{asset('assets/css/colors/brown-color.css"><span style="background-color: #795548;')}}"></span></li>
            <li data-path="{{asset('assets/css/colors/cyan-color.css"><span style="background-color: #00bcd4;')}}"></span></li>
            <li data-path="{{asset('assets/css/colors/green-color.css"><span style="background-color: #4caf50;')}}"></span></li>
            <li data-path="{{asset('assets/css/colors/indigo-color.css"><span style="background-color: #3f51b5;')}}"></span></li>
            <li data-path="{{asset('assets/css/colors/lime-color.css"><span style="background-color: #cddc39;')}}"></span></li>
            <li data-path="{{asset('assets/css/colors/orange-color.css"><span style="background-color: #ff9800;')}}"></span></li>
            <li data-path="{{asset('assets/css/colors/red-color.css"><span style="background-color: #f44336;')}}"></span></li>
            <li data-path="{{asset('assets/css/colors/teal-color.css"><span style="background-color: #009688;')}}"></span></li>
            <li data-path="{{asset('assets/css/colors/purple-color.css"><span style="background-color: #9c27b0;')}}"></span></li>
        </ul>
    </div>
    <!-- end colorPanel -->


    <!-- Core JS Files -->
    <script src="{{asset('assets/js/vendor/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <!-- Plugins -->
    <script src="{{asset('assets/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.horizontalmenu.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>