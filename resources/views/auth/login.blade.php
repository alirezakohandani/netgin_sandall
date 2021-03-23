@include('layouts.header')

<body>
    <div class="wrapper">

        <!-- Start mini-header -->
        <header class="mini-header pt-4 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="logo-area-mini-header">
                            <a href="#">
                                <img src="./assets/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End mini-header -->

        <!-- Start main-content -->
        <main class="main-content dt-sl mt-4 mb-3">
            <div class="container main-container">

                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 col-12 mx-auto">
                        <div class="form-ui dt-sl dt-sn pt-4"> 
                            <div class="section-title title-wide mb-1 no-after-title-wide">
                                <h2 class="font-weight-bold">ورود به دیدیکالا</h2>
                            </div>
                            <form action="">
                                @include('partials.alerts')
                                <div class="form-row-title">
                                    <h3>ایمیل یا شماره موبایل</h3>
                                </div>
                                <div class="form-row with-icon">
                                    <input type="text" class="input-ui pr-2" placeholder="ایمیل یا شماره موبایل خود را وارد نمایید">
                                    <i class="mdi mdi-account-circle-outline"></i>
                                </div>
                                <div class="form-row-title">
                                    <h3>رمز عبور</h3>
                                </div>
                                <div class="form-row with-icon">
                                    <input type="password" class="input-ui pr-2" placeholder="رمز عبور خود را وارد نمایید">
                                    <i class="mdi mdi-lock-open-variant-outline"></i>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="custom-control custom-checkbox float-right mt-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">
                                            مرا به خاطر بسپار
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <button class="btn-primary-cm btn-with-icon mx-auto w-100">
                                        <i class="mdi mdi-login-variant"></i>
                                        ورود به دیدیکالا
                                    </button>
                                </div>
                                <div class="form-footer text-right mt-3">
                                    <span class="d-block font-weight-bold">کاربر جدید هستید؟</span>
                                    <a href="#" class="d-inline-block mr-3 mt-2">ثبت نام در دیدیکالا</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <!-- End main-content -->

        <!-- Start mini-footer -->
        <footer class="mini-footer dt-sl">
            <div class="container main-container">
                <div class="row">
                    <div class="col-12">
                        <ul class="mini-footer-menu">
                            <li><a href="#">درباره دیدیکالا</a></li>
                            <li><a href="#">فرصت های شغلی</a></li>
                            <li><a href="#">تماس با ما</a></li>
                            <li><a href="#">همکاری با سازمان ها</a></li>
                        </ul>
                    </div>
                    <div class="col-12 mt-2 mb-3">
                        <div class="footer-light-text">
                            استفاده از مطالب فروشگاه اینترنتی دیدیکالا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به (فروشگاه آنلاین دیدیکالا) می‌باشد.
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="copy-right-mini-footer">
                            Copyright © 2019 Didikala
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End mini-footer -->

    </div>

    <!-- colorPanel -->
    <div id="colorswitch-option">
        <button><i class="mdi mdi-settings"></i></button>
        <ul>
            <li class="active" data-path="./assets/css/colors/default.css"><span style="background-color: #f7858d;"></span></li>
            <li data-path="./assets/css/colors/amber-color.css"><span style="background-color: #ffab00;"></span></li>
            <li data-path="./assets/css/colors/blue-color.css"><span style="background-color: #2979ff;"></span></li>
            <li data-path="./assets/css/colors/blue-grey-color.css"><span style="background-color: #607d8b;"></span></li>
            <li data-path="./assets/css/colors/brown-color.css"><span style="background-color: #795548;"></span></li>
            <li data-path="./assets/css/colors/cyan-color.css"><span style="background-color: #00bcd4;"></span></li>
            <li data-path="./assets/css/colors/green-color.css"><span style="background-color: #4caf50;"></span></li>
            <li data-path="./assets/css/colors/indigo-color.css"><span style="background-color: #3f51b5;"></span></li>
            <li data-path="./assets/css/colors/lime-color.css"><span style="background-color: #cddc39;"></span></li>
            <li data-path="./assets/css/colors/orange-color.css"><span style="background-color: #ff9800;"></span></li>
            <li data-path="./assets/css/colors/red-color.css"><span style="background-color: #f44336;"></span></li>
            <li data-path="./assets/css/colors/teal-color.css"><span style="background-color: #009688;"></span></li>
            <li data-path="./assets/css/colors/purple-color.css"><span style="background-color: #9c27b0;"></span></li>
        </ul>
    </div>
    <!-- end colorPanel -->


    <!-- Core JS Files -->
    <script src="./assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/vendor/popper.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="./assets/js/vendor/owl.carousel.min.js"></script>
    <script src="./assets/js/vendor/jquery.horizontalmenu.js"></script>
    <script src="./assets/js/vendor/nouislider.min.js"></script>
    <script src="./assets/js/vendor/wNumb.js"></script>
    <script src="./assets/js/vendor/ResizeSensor.min.js"></script>
    <script src="./assets/js/vendor/theia-sticky-sidebar.min.js"></script>
    <!-- Main JS File -->
    <script src="./assets/js/main.js"></script>
</body>
