
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f7858d">
    <meta name="msapplication-navbutton-color" content="#f7858d">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f7858d">
    <title>Index Page</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="./assets/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/vendor/jquery.horizontalmenu.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="./assets/css/vendor/materialdesignicons.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/colors/default.css" id="colorswitch">
    @yield('links')
</head>

<body>

    <div class="wrapper">

        <!-- Start header -->
        <header class="main-header js-fixed-topbar dt-sl">
            <!-- Start ads -->
            <a href="#" class="ads-header hidden-sm" target="_blank"
                style="background-image: url(./assets/img/banner/large-ads.jpg)"></a>
            <!-- End ads -->
            <!-- Start topbar -->
            <div class="container main-container">
                <div class="topbar dt-sl">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="logo-area float-right">
                                <a href="#">
                                    <img src="./assets/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 hidden-sm">
                            <div class="search-area dt-sl">
                                <form action="" class="search">
                                    <input type="text"
                                        placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                                    <button type="submit"><img src="./assets/img/theme/search.png" alt=""></button>
                                    <button class="close-search-result" type="button"><i class="mdi mdi-close"></i></button>
                                    <div class="search-result">
                                        <ul>
                                            <li>
                                                <a href="#">موبایل</a>
                                            </li>
                                            <li>
                                                <a href="#">مد و پوشاک</a>
                                            </li>
                                            <li>
                                                <a href="#">میکروفن</a>
                                            </li>
                                            <li>
                                                <a href="#">میز تلویزیون</a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 topbar-left">
                            <ul class="nav float-left">
                                <li class="nav-item account dropdown">
                                    <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="label-dropdown">حساب کاربری</span>
                                        <i class="mdi mdi-account-circle-outline"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-left">
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-account-card-details-outline"></i>پروفایل
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="float-left badge badge-dark">۴</span>
                                            <i class="mdi mdi-comment-text-outline"></i>پیغام ها
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-account-edit-outline"></i>ویرایش حساب کاربری
                                        </a>
                                        <div class="dropdown-divider" role="presentation"></div>
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-logout-variant"></i>خروج
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End topbar -->

            <!-- Start bottom-header -->
            <div class="bottom-header dt-sl mb-sm-bottom-header">
                <div class="container main-container">
                    <!-- Start Main-Menu -->
                    <nav class="main-menu dt-sl">
                        <ul class="list float-right hidden-sm">
                            <!-- mega menu 2 column -->
                            <li class="list-item list-item-has-children mega-menu mega-menu-col-2">
                                <a class="nav-link" href="#">کالای دیجیتال</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو چهار</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو پنج</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو شش</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو چهار</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو پنج</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو شش</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو هفت</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- mega menu 3 column -->
                            <li class="list-item list-item-has-children mega-menu mega-menu-col-3">
                                <a class="nav-link" href="#">بهداشت و سلامت</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو چهار</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو پنج</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو شش</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو هفت</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i> زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i> زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i> زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i> زیر منو چهار</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i> زیر منو پنج</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i> زیر منو شش</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i> زیر منو هفت</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item">
                                        <a href="#">
                                            <img src="./assets/img/theme/mega-menu.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- mega menu 4 column -->
                            <li class="list-item list-item-has-children mega-menu mega-menu-col-4">
                                <a class="nav-link" href="#">ابزار و اداری</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو چهار</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو پنج</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو شش</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو هفت</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو هشت</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو نه</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو چهار</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو پنج</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو شش</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو هفت</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو چهار</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو پنج</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو شش</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو چهار</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- mega menu 5 column -->
                            <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                                <a class="nav-link" href="">مد و پوشاک</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو چهار</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو پنج</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو شش</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو هفت</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو هشت</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو نه</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو چهار</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو پنج</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو شش</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو هفت</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو چهار</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو پنج</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو شش</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو چهار</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">عنوان دسته</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو چهار</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو پنج</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- dropdown-menu -->
                            <li class="list-item list-item-has-children menu-col-1">
                                <a class="nav-link" href="#">خانه و آشپزخانه</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو یک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو دو</a>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">زیر منو سه</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه - یک</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه - دو</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">زیر منو سه - سه</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">ورزش و سفر</a>
                            </li>
                        </ul>
                        <ul class="nav float-left">
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="label-dropdown">سبد خرید</span>
                                    <i class="mdi mdi-cart-outline"></i>
                                    <span class="count">2</span>
                                </a>
                                <div class="dropdown-menu cart dropdown-menu-sm dropdown-menu-left">
                                    <div class="dropdown-header">سبد خرید</div>
                                    <div class="dropdown-list-icons">
                                        <a href="#" class="dropdown-item">
                                            <div class="dropdown-item-icon">
                                                <img src="./assets/img/cart/01.jpg" alt="">
                                            </div>
                                            <div class="mr-3">
                                                تیشرت مردانه
                                                <div class="pt-1">۵۹,۰۰۰ تومان</div>
                                            </div>
                                            <button class="remove"><i class="mdi mdi-close"></i></button>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="dropdown-item-icon">
                                                <img src="./assets/img/cart/02.jpg" alt="">
                                            </div>
                                            <div class="mr-3">
                                                کت مردانه
                                                <div class="pt-1">۱۹۹,۰۰۰ تومان</div>
                                            </div>
                                            <button class="remove"><i class="mdi mdi-close"></i></button>
                                        </a>
                                    </div>
                                    <hr>
                                    <div class="dropdown-footer text-center">
                                        <div class="dt-sl mb-3">
                                            <span class="float-right">جمع :</span>
                                            <span class="float-left">۲۵۸,۰۰۰ تومان</span>
                                        </div>
                                        <a href="#" class="btn btn-success">مشاهده سبد خرید</a>
                                        <a href="#" class="btn btn-primary">پرداخت</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <button class="btn-menu">
                            <div class="align align__justify">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>
                        <div class="side-menu">
                            <div class="logo-nav-res dt-sl text-center">
                                <a href="#">
                                    <img src="assets/img/logo.png" alt="">
                                </a>
                            </div>
                            <div class="search-box-side-menu dt-sl text-center mt-2 mb-3">
                                <form action="">
                                    <input type="text" name="s" placeholder="جستجو کنید...">
                                    <i class="mdi mdi-magnify"></i>
                                </form>
                            </div>
                            <ul class="navbar-nav dt-sl">
                                <li class="sub-menu">
                                    <a href="#">کالای دیجیتال</a>
                                    <ul>
                                        <li class="sub-menu">
                                            <a href="#">عنوان دسته</a>
                                            <ul>
                                                <li>
                                                    <a href="#">زیر منو یک</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو دو</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو سه</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو چهار</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu">
                                            <a href="#">عنوان دسته</a>
                                            <ul>
                                                <li>
                                                    <a href="#">زیر منو یک</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو دو</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو سه</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">عنوان دسته</a>
                                        </li>
                                        <li>
                                            <a href="#">عنوان دسته</a>
                                        </li>
                                        <li class="sub-menu">
                                            <a href="#">عنوان دسته</a>
                                            <ul>
                                                <li>
                                                    <a href="#">زیر منو یک</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو دو</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو سه</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو چهار</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href="#">بهداشت و سلامت</a>
                                    <ul>
                                        <li class="sub-menu">
                                            <a href="#">عنوان دسته</a>
                                            <ul>
                                                <li>
                                                    <a href="#">زیر منو یک</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو دو</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو سه</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو چهار</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu">
                                            <a href="#">عنوان دسته</a>
                                            <ul>
                                                <li>
                                                    <a href="#">زیر منو یک</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو دو</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو سه</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">عنوان دسته</a>
                                        </li>
                                        <li>
                                            <a href="#">عنوان دسته</a>
                                        </li>
                                        <li class="sub-menu">
                                            <a href="#">عنوان دسته</a>
                                            <ul>
                                                <li>
                                                    <a href="#">زیر منو یک</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو دو</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو سه</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو چهار</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href="#">ابزار و اداری</a>
                                    <ul>
                                        <li class="sub-menu">
                                            <a href="#">عنوان دسته</a>
                                            <ul>
                                                <li>
                                                    <a href="#">زیر منو یک</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو دو</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو سه</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو چهار</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu">
                                            <a href="#">عنوان دسته</a>
                                            <ul>
                                                <li>
                                                    <a href="#">زیر منو یک</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو دو</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو سه</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">عنوان دسته</a>
                                        </li>
                                        <li>
                                            <a href="#">عنوان دسته</a>
                                        </li>
                                        <li class="sub-menu">
                                            <a href="#">عنوان دسته</a>
                                            <ul>
                                                <li>
                                                    <a href="#">زیر منو یک</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو دو</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو سه</a>
                                                </li>
                                                <li>
                                                    <a href="#">زیر منو چهار</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">مد و پوشاک</a>
                                </li>
                                <li>
                                    <a href="#">خانه و آشپزخانه</a>
                                </li>
                                <li>
                                    <a href="#">ورزش و سفر</a>
                                </li>
                            </ul>
                        </div>
                        <div class="overlay-side-menu">
                        </div>
                    </nav>
                    <!-- End Main-Menu -->
                </div>
            </div>
            <!-- End bottom-header -->
        </header>
        <!-- End header -->

        <!-- Start main-content -->
        <main class="main-content dt-sl mt-4 mb-3">
            <div class="container main-container">

                <!-- Start Main-Slider -->
                <div class="row mb-5">
                    <aside class="sidebar col-xl-2 col-lg-3 col-12 order-2 order-lg-1 pl-0 hidden-md">
                        <!-- Start banner -->
                        <div class="sidebar-inner dt-sl">
                            <div class="sidebar-banner">
                                <a href="#" target="_top">
                                    <img src="./assets/img/banner/sidebar-banner-1.gif" width="100%" height="329"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <!-- End banner -->
                    </aside>
                    <div class="col-xl-10 col-lg-9 col-12 order-1 order-lg-2">
                        <!-- Start main-slider -->
                        <section id="main-slider" class="main-slider carousel slide carousel-fade card hidden-sm"
                            data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                                <li data-target="#main-slider" data-slide-to="1"></li>
                                <li data-target="#main-slider" data-slide-to="2"></li>
                                <li data-target="#main-slider" data-slide-to="3"></li>
                                <li data-target="#main-slider" data-slide-to="4"></li>
                                <li data-target="#main-slider" data-slide-to="5"></li>
                                <li data-target="#main-slider" data-slide-to="6"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a class="main-slider-slide" href="#"
                                        style="background-image: url(./assets/img/main-slider/1.jpg)">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="main-slider-slide" href="#"
                                        style="background-image: url(./assets/img/main-slider/2.jpg)">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="main-slider-slide" href="#"
                                        style="background-image: url(./assets/img/main-slider/3.jpg)">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="main-slider-slide" href="#"
                                        style="background-image: url(./assets/img/main-slider/4.jpg)">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="main-slider-slide" href="#"
                                        style="background-image: url(./assets/img/main-slider/5.jpg)">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="main-slider-slide" href="#"
                                        style="background-image: url(./assets/img/main-slider/6.jpg)">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="main-slider-slide" href="#"
                                        style="background-image: url(./assets/img/main-slider/7.jpg)">
                                    </a>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
                                <i class="mdi mdi-chevron-right"></i>
                            </a>
                            <a class="carousel-control-next" href="#main-slider" data-slide="next">
                                <i class="mdi mdi-chevron-left"></i>
                            </a>
                        </section>
                        <section id="main-slider-res"
                            class="main-slider carousel slide carousel-fade card d-none show-sm" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#main-slider-res" data-slide-to="0" class="active"></li>
                                <li data-target="#main-slider-res" data-slide-to="1"></li>
                                <li data-target="#main-slider-res" data-slide-to="2"></li>
                                <li data-target="#main-slider-res" data-slide-to="3"></li>
                                <li data-target="#main-slider-res" data-slide-to="4"></li>
                                <li data-target="#main-slider-res" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a class="main-slider-slide" href="#">
                                        <img src="./assets/img/main-slider/slider-responsive/1.jpg" alt=""
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="main-slider-slide" href="#">
                                        <img src="./assets/img/main-slider/slider-responsive/2.jpg" alt=""
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="main-slider-slide" href="#">
                                        <img src="./assets/img/main-slider/slider-responsive/3.jpg" alt=""
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="main-slider-slide" href="#">
                                        <img src="./assets/img/main-slider/slider-responsive/4.jpg" alt=""
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="main-slider-slide" href="#">
                                        <img src="./assets/img/main-slider/slider-responsive/5.jpg" alt=""
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a class="main-slider-slide" href="#">
                                        <img src="./assets/img/main-slider/slider-responsive/6.jpg" alt=""
                                            class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#main-slider-res" role="button" data-slide="prev">
                                <i class="mdi mdi-chevron-right"></i>
                            </a>
                            <a class="carousel-control-next" href="#main-slider-res" data-slide="next">
                                <i class="mdi mdi-chevron-left"></i>
                            </a>
                        </section>
                        <!-- End main-slider -->
                    </div>
                </div>
                <!-- End Main-Slider -->

                <!-- Start Product-Slider -->
                <div class="row">
                    <div class="col-xl-10 col-lg-12">
                        <section class="slider-section dt-sl mb-5">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="section-title text-sm-title title-wide no-after-title-wide">
                                        <h2>پر فروش ترینها</h2>
                                        <a href="#">مشاهده همه</a>
                                    </div>
                                </div>

                                <!-- Start Product-Slider -->
                                <div class="col-12 px-res-0">
                                    <div class="product-carousel carousel-md owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="product-card">
                                                <div class="product-head">
                                                    <div class="rating-stars">
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                    </div>
                                                    <div class="discount">
                                                        <span>20%</span>
                                                    </div>
                                                </div>
                                                <a class="product-thumb" href="shop-single.html">
                                                    <img src="./assets/img/products/07.jpg" alt="Product Thumbnail">
                                                </a>
                                                <div class="product-card-body">
                                                    <h5 class="product-title">
                                                        <a href="shop-single.html">مانتو زنانه</a>
                                                    </h5>
                                                    <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                                    <span class="product-price">157,000 تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-card">
                                                <div class="product-head">
                                                    <div class="rating-stars">
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                    </div>
                                                </div>
                                                <a class="product-thumb" href="shop-single.html">
                                                    <img src="./assets/img/products/017.jpg" alt="Product Thumbnail">
                                                </a>
                                                <div class="product-card-body">
                                                    <h5 class="product-title">
                                                        <a href="shop-single.html">کت مردانه</a>
                                                    </h5>
                                                    <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                                    <span class="product-price">199,000 تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-card">
                                                <div class="product-head">
                                                    <div class="rating-stars">
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </div>
                                                </div>
                                                <a class="product-thumb" href="shop-single.html">
                                                    <img src="./assets/img/products/013.jpg" alt="Product Thumbnail">
                                                </a>
                                                <div class="product-card-body">
                                                    <h5 class="product-title">
                                                        <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                                    </h5>
                                                    <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                                    <span class="product-price">135,000 تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-card">
                                                <div class="product-head">
                                                    <div class="rating-stars">
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </div>
                                                </div>
                                                <a class="product-thumb" href="shop-single.html">
                                                    <img src="./assets/img/products/09.jpg" alt="Product Thumbnail">
                                                </a>
                                                <div class="product-card-body">
                                                    <h5 class="product-title">
                                                        <a href="shop-single.html">مانتو زنانه</a>
                                                    </h5>
                                                    <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                                    <span class="product-price">145,000 تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-card">
                                                <div class="product-head">
                                                    <div class="rating-stars">
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                    </div>
                                                </div>
                                                <a class="product-thumb" href="shop-single.html">
                                                    <img src="./assets/img/products/010.jpg" alt="Product Thumbnail">
                                                </a>
                                                <div class="product-card-body">
                                                    <h5 class="product-title">
                                                        <a href="shop-single.html">مانتو زنانه</a>
                                                    </h5>
                                                    <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                                    <span class="product-price">170,000 تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-card">
                                                <div class="product-head">
                                                    <div class="rating-stars">
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </div>
                                                    <div class="discount">
                                                        <span>20%</span>
                                                    </div>
                                                </div>
                                                <a class="product-thumb" href="shop-single.html">
                                                    <img src="./assets/img/products/011.jpg" alt="Product Thumbnail">
                                                </a>
                                                <div class="product-card-body">
                                                    <h5 class="product-title">
                                                        <a href="shop-single.html">مانتو زنانه</a>
                                                    </h5>
                                                    <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                                    <span class="product-price">185,000 تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-card">
                                                <div class="product-head">
                                                    <div class="rating-stars">
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star active"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </div>
                                                </div>
                                                <a class="product-thumb" href="shop-single.html">
                                                    <img src="./assets/img/products/019.jpg" alt="Product Thumbnail">
                                                </a>
                                                <div class="product-card-body">
                                                    <h5 class="product-title">
                                                        <a href="shop-single.html">تیشرت مردانه</a>
                                                    </h5>
                                                    <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                                    <span class="product-price">54,000 تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product-Slider -->

                            </div>
                        </section>
                    </div>
                    <div class="col-xl-2 col-lg-3 hidden-lg pr-0">
                        <div class="widget-suggestion dt-sn pt-3 mt-3">
                            <div class="widget-suggestion-title">
                                <img src="./assets/img/theme/suggestion-title.png" alt="">
                            </div>
                            <div id="progressBar">
                                <div class="slide-progress"></div>
                            </div>
                            <div id="suggestion-slider" class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="product-card mb-3 shadow-unset">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                            </div>
                                            <div class="discount">
                                                <span>20%</span>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/07.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">157,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3 shadow-unset">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/017.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">کت مردانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                            <span class="product-price">199,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3 shadow-unset">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/013.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">135,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3 shadow-unset">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/09.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">145,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product-Slider -->

                <!-- Start Banner -->
                <div class="row mt-3 mb-5">
                    <div class="col-sm-6 col-12 mb-2">
                        <div class="widget-banner">
                            <a href="#">
                                <img src="./assets/img/banner/medium-banner-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 mb-2">
                        <div class="widget-banner">
                            <a href="#">
                                <img src="./assets/img/banner/medium-banner-2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Banner -->

                <!-- Start Banner -->
                <div class="row mt-3 mb-5">
                    <div class="col-md-3 col-sm-6 col-6 mb-2">
                        <div class="widget-banner">
                            <a href="#">
                                <img src="./assets/img/banner/small-banner-5.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mb-2">
                        <div class="widget-banner">
                            <a href="#">
                                <img src="./assets/img/banner/small-banner-6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mb-2">
                        <div class="widget-banner">
                            <a href="#">
                                <img src="./assets/img/banner/small-banner-7.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mb-2">
                        <div class="widget-banner">
                            <a href="#">
                                <img src="./assets/img/banner/small-banner-8.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Banner -->

                <!-- Start Category-Section -->
                <div class="row mt-3 mb-5">
                    <div class="col-12">
                        <div class="category-section dt-sn dt-sl">
                            <div class="category-section-title dt-sl">
                                <h3>بیش از ۱،۵۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف</h3>
                            </div>
                            <div class="category-section-slider dt-sl">
                                <div class="category-slider owl-carousel">
                                    <div class="item">
                                        <a href="#" class="promotion-category">
                                            <img src="./assets/img/category/notebook-computer.png" alt="">
                                            <h4 class="promotion-category-name">کالای دیجیتال</h4>
                                            <h6 class="promotion-category-quantity">۱۵۶۰۰۰ کالا</h6>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="promotion-category">
                                            <img src="./assets/img/category/lifeline-in-a-heart-outline.png" alt="">
                                            <h4 class="promotion-category-name">آرایشی، بهداشتی و سلامت</h4>
                                            <h6 class="promotion-category-quantity">۴۸۰۰۰ کالا</h6>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="promotion-category">
                                            <img src="./assets/img/category/repair-tools.png" alt="">
                                            <h4 class="promotion-category-name">خودرو،ابزار و اداری</h4>
                                            <h6 class="promotion-category-quantity">۵۶۰۰۰ کالا</h6>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="promotion-category">
                                            <img src="./assets/img/category/hanbok.png" alt="">
                                            <h4 class="promotion-category-name">مد و پوشاک</h4>
                                            <h6 class="promotion-category-quantity">۲۱۷۰۰۰ کالا</h6>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="promotion-category">
                                            <img src="./assets/img/category/sofa.png" alt="">
                                            <h4 class="promotion-category-name">خانه و آشپزخانه</h4>
                                            <h6 class="promotion-category-quantity">۲۲۹۰۰۰ کالا</h6>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="promotion-category">
                                            <img src="./assets/img/category/school-material.png" alt="">
                                            <h4 class="promotion-category-name">لوازم تحریر و هنر</h4>
                                            <h6 class="promotion-category-quantity">۸۶۰۰۰ کالا</h6>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="promotion-category">
                                            <img src="./assets/img/category/baby-girl.png" alt="">
                                            <h4 class="promotion-category-name">کودک و نوزاد</h4>
                                            <h6 class="promotion-category-quantity">۳۲۰۰۰ کالا</h6>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="promotion-category">
                                            <img src="./assets/img/category/adventurer.png" alt="">
                                            <h4 class="promotion-category-name">ورزش و سفر</h4>
                                            <h6 class="promotion-category-quantity">۱۵۰۰۰ کالا</h6>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="promotion-category">
                                            <img src="./assets/img/category/restaurant-cutlery-circular-symbol-of-a-spoon-and-a-fork-in-a-circle.png"
                                                alt="">
                                            <h4 class="promotion-category-name">خوردنی و آشامیدنی</h4>
                                            <h6 class="promotion-category-quantity">۲۲۰۰۰ کالا</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category-Section -->

                <!-- Start Product-Slider -->
                <section class="slider-section dt-sl mb-5">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="section-title text-sm-title title-wide no-after-title-wide">
                                <h2>پر فروش ترینها</h2>
                                <a href="#">مشاهده همه</a>
                            </div>
                        </div>

                        <!-- Start Product-Slider -->
                        <div class="col-12">
                            <div class="product-carousel carousel-lg owl-carousel owl-theme">
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                            </div>
                                            <div class="discount">
                                                <span>20%</span>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/07.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">157,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/017.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">کت مردانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                            <span class="product-price">199,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/013.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">135,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/09.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">145,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/010.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">170,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                            <div class="discount">
                                                <span>20%</span>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/011.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">185,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/019.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">تیشرت مردانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                            <span class="product-price">54,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product-Slider -->

                    </div>
                </section>
                <!-- End Product-Slider -->

                <!-- Start Banner -->
                <div class="row mt-3 mb-5">
                    <div class="col-12">
                        <div class="widget-banner">
                            <a href="#">
                                <img src="./assets/img/banner/large-banner.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Banner -->

                <!-- Start Product-Slider -->
                <section class="slider-section dt-sl mb-5">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="section-title text-sm-title title-wide no-after-title-wide">
                                <h2>پر فروش ترینها</h2>
                                <a href="#">مشاهده همه</a>
                            </div>
                        </div>

                        <!-- Start Product-Slider -->
                        <div class="col-12">
                            <div class="product-carousel carousel-lg owl-carousel owl-theme">
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                            </div>
                                            <div class="discount">
                                                <span>20%</span>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/07.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">157,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/017.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">کت مردانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                            <span class="product-price">199,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/013.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">135,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/09.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">145,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/010.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">170,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                            <div class="discount">
                                                <span>20%</span>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/011.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">مانتو زنانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                            <span class="product-price">185,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-card mb-3">
                                        <div class="product-head">
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                        </div>
                                        <a class="product-thumb" href="shop-single.html">
                                            <img src="./assets/img/products/019.jpg" alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="shop-single.html">تیشرت مردانه</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                            <span class="product-price">54,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product-Slider -->

                    </div>
                </section>
                <!-- End Product-Slider -->

                <!-- Start Feature-Product -->
                <section class="dt-sl dt-sn mb-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-sm-title title-wide no-after-title-wide">
                                <h2>پیشنهاد ما</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 pt-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-horizontal-product">
                                        <div class="card-horizontal-product-thumb">
                                            <a href="#">
                                                <img src="./assets/img/products/017.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="card-horizontal-product-content">
                                            <div class="card-horizontal-product-title">
                                                <a href="#">
                                                    <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                                </a>
                                            </div>
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                            <div class="card-horizontal-product-price">
                                                <span>199,000 تومان</span>
                                            </div>
                                            <div class="card-horizontal-product-buttons">
                                                <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card-horizontal-product">
                                        <div class="card-horizontal-product-thumb">
                                            <a href="#">
                                                <img src="./assets/img/products/020.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="card-horizontal-product-content">
                                            <div class="card-horizontal-product-title">
                                                <a href="#">
                                                    <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                                </a>
                                            </div>
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                            <div class="card-horizontal-product-price">
                                                <span>199,000 تومان</span>
                                            </div>
                                            <div class="card-horizontal-product-buttons">
                                                <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card-horizontal-product">
                                        <div class="card-horizontal-product-thumb">
                                            <a href="#">
                                                <img src="./assets/img/products/014.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="card-horizontal-product-content">
                                            <div class="card-horizontal-product-title">
                                                <a href="#">
                                                    <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                                </a>
                                            </div>
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                            <div class="card-horizontal-product-price">
                                                <span>199,000 تومان</span>
                                            </div>
                                            <div class="card-horizontal-product-buttons">
                                                <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 pt-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-horizontal-product">
                                        <div class="card-horizontal-product-thumb">
                                            <a href="#">
                                                <img src="./assets/img/products/016.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="card-horizontal-product-content">
                                            <div class="card-horizontal-product-title">
                                                <a href="#">
                                                    <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                                </a>
                                            </div>
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                            <div class="card-horizontal-product-price">
                                                <span>199,000 تومان</span>
                                            </div>
                                            <div class="card-horizontal-product-buttons">
                                                <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card-horizontal-product">
                                        <div class="card-horizontal-product-thumb">
                                            <a href="#">
                                                <img src="./assets/img/products/018.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="card-horizontal-product-content">
                                            <div class="card-horizontal-product-title">
                                                <a href="#">
                                                    <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                                </a>
                                            </div>
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                            <div class="card-horizontal-product-price">
                                                <span>199,000 تومان</span>
                                            </div>
                                            <div class="card-horizontal-product-buttons">
                                                <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card-horizontal-product">
                                        <div class="card-horizontal-product-thumb">
                                            <a href="#">
                                                <img src="./assets/img/products/015.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="card-horizontal-product-content">
                                            <div class="card-horizontal-product-title">
                                                <a href="#">
                                                    <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                                </a>
                                            </div>
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                            <div class="card-horizontal-product-price">
                                                <span>199,000 تومان</span>
                                            </div>
                                            <div class="card-horizontal-product-buttons">
                                                <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 pt-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-horizontal-product">
                                        <div class="card-horizontal-product-thumb">
                                            <a href="#">
                                                <img src="./assets/img/products/017.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="card-horizontal-product-content">
                                            <div class="card-horizontal-product-title">
                                                <a href="#">
                                                    <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                                </a>
                                            </div>
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                            <div class="card-horizontal-product-price">
                                                <span>199,000 تومان</span>
                                            </div>
                                            <div class="card-horizontal-product-buttons">
                                                <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card-horizontal-product">
                                        <div class="card-horizontal-product-thumb">
                                            <a href="#">
                                                <img src="./assets/img/products/020.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="card-horizontal-product-content">
                                            <div class="card-horizontal-product-title">
                                                <a href="#">
                                                    <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                                </a>
                                            </div>
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                            <div class="card-horizontal-product-price">
                                                <span>199,000 تومان</span>
                                            </div>
                                            <div class="card-horizontal-product-buttons">
                                                <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card-horizontal-product">
                                        <div class="card-horizontal-product-thumb">
                                            <a href="#">
                                                <img src="./assets/img/products/014.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="card-horizontal-product-content">
                                            <div class="card-horizontal-product-title">
                                                <a href="#">
                                                    <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                                </a>
                                            </div>
                                            <div class="rating-stars">
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star active"></i>
                                                <i class="mdi mdi-star"></i>
                                            </div>
                                            <div class="card-horizontal-product-price">
                                                <span>199,000 تومان</span>
                                            </div>
                                            <div class="card-horizontal-product-buttons">
                                                <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Feature-Product -->

                <!-- Start Brand-Slider -->
                <section class="slider-section dt-sl mb-5">
                    <div class="row">
                        <!-- Start Product-Slider -->
                        <div class="col-12">
                            <div class="brand-slider carousel-lg owl-carousel owl-theme">
                                <div class="item">
                                    <img src="./assets/img/brand/1076.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="./assets/img/brand/1078.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="./assets/img/brand/1080.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="./assets/img/brand/2315.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="./assets/img/brand/1086.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="./assets/img/brand/5189.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="./assets/img/brand/1000006973.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="./assets/img/brand/1000014452.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- End Product-Slider -->

                    </div>
                </section>
                <!-- End Brand-Slider -->

            </div>
        </main>
        <!-- End main-content -->

        <!-- Start footer -->
        <footer class="main-footer dt-sl">
            <div class="back-to-top">
                <a href="#"><span class="icon"><i class="mdi mdi-chevron-up"></i></span> <span>بازگشت به
                        بالا</span></a>
            </div>
            <div class="container main-container">
                <div class="footer-services">
                    <div class="row">
                        <div class="service-item col">
                            <a href="#" target="_blank">
                                <img src="assets/img/svg/delivery.svg">
                            </a>
                            <p>تحویل اکسپرس</p>
                        </div>
                        <div class="service-item col">
                            <a href="#" target="_blank">
                                <img src="assets/img/svg/contact-us.svg">
                            </a>
                            <p>پشتیبانی 24 ساعته</p>
                        </div>
                        <div class="service-item col">
                            <a href="#" target="_blank">
                                <img src="assets/img/svg/payment-terms.svg">
                            </a>
                            <p>پرداخت درمحل</p>
                        </div>
                        <div class="service-item col">
                            <a href="#" target="_blank">
                                <img src="assets/img/svg/return-policy.svg">
                            </a>
                            <p>۷ روز ضمانت بازگشت</p>
                        </div>
                        <div class="service-item col">
                            <a href="#" target="_blank">
                                <img src="assets/img/svg/origin-guarantee.svg">
                            </a>
                            <p>ضمانت اصل بودن کالا</p>
                        </div>
                    </div>
                </div>
                <div class="footer-widgets">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="widget-menu widget card">
                                <header class="card-header">
                                    <h3 class="card-title">راهنمای خرید از تاپ کالا</h3>
                                </header>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="#">نحوه ثبت سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#">رویه ارسال سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#">شیوه‌های پرداخت</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="widget-menu widget card">
                                <header class="card-header">
                                    <h3 class="card-title">خدمات مشتریان</h3>
                                </header>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="#">پاسخ به پرسش‌های متداول</a>
                                    </li>
                                    <li>
                                        <a href="#">رویه‌های بازگرداندن کالا</a>
                                    </li>
                                    <li>
                                        <a href="#">شرایط استفاده</a>
                                    </li>
                                    <li>
                                        <a href="#">حریم خصوصی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="widget-menu widget card">
                                <header class="card-header">
                                    <h3 class="card-title">با تاپ کالا</h3>
                                </header>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="#">فروش در تاپ کالا</a>
                                    </li>
                                    <li>
                                        <a href="#">همکاری با سازمان‌ها</a>
                                    </li>
                                    <li>
                                        <a href="#">فرصت‌های شغلی</a>
                                    </li>
                                    <li>
                                        <a href="#">تماس با تاپ کالا</a>
                                    </li>
                                    <li>
                                        <a href="#">درباره تاپ کالا</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="newsletter">
                                <p>از تخفیف‌ها و جدیدترین‌های فروشگاه باخبر شوید:</p>
                                <form action="">
                                    <input type="email" class="form-control"
                                        placeholder="آدرس ایمیل خود را وارد کنید...">
                                    <input type="submit" class="btn btn-primary" value="ارسال">
                                </form>
                            </div>
                            <div class="socials">
                                <p>ما را در شبکه های اجتماعی دنبال کنید.</p>
                                <div class="footer-social">
                                    <ul class="text-center">
                                        <li><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                        <li><a href="#"><i class="mdi mdi-telegram"></i></a></li>
                                        <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="col-12 text-right">
                            <span>هفت روز هفته ، 24 ساعت شبانه‌روز پاسخگوی شما هستیم.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description">
                <div class="container main-container">
                    <div class="row">
                        <div class="site-description col-12 col-lg-7">
                            <h1 class="site-title">فروشگاه اینترنتی تاپ کالا، بررسی، انتخاب و خرید آنلاین</h1>
                            <p>
                                تاپ کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با
                                پایبندی به سه اصل کلیدی، پرداخت در
                                محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا، موفق شده تا همگام با فروشگاه‌های
                                معتبر جهان، به بزرگ‌ترین فروشگاه
                                اینترنتی ایران تبدیل شود. به محض ورود به تاپ کالا با یک سایت پر از کالا رو به رو
                                می‌شوید! هر آنچه که نیاز دارید و به
                                ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.
                            </p>
                        </div>
                        <div class="symbol col-12 col-lg-5">
                            <a href="#" target="_blank"><img src="assets/img/symbol-01.png" alt=""></a>
                            <a href="#" target="_blank"><img src="assets/img/symbol-02.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container main-container">
                    <p>
                        استفاده از مطالب فروشگاه اینترنتی تاپ کالا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است.
                        کلیه حقوق این سایت متعلق
                        به شرکت نوآوران فن آوازه (فروشگاه آنلاین تاپ کالا) می‌باشد.
                    </p>
                </div>
            </div>
        </footer>
        <!-- End footer -->

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
    <!-- Main JS File -->
    <script src="./assets/js/main.js"></script>
</body>

</html>