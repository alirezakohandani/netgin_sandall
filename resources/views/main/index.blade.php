@extends('layouts.app')

@section('content')

<main class="main-content dt-sl mt-4 mb-3">
    @include('partials.alerts')
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
                                <h2>???? ???????? ????????????</h2>
                                <a href="#">???????????? ??????</a>
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
                                                <a href="shop-single.html">?????????? ??????????</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                            <span class="product-price">157,000 ??????????</span>
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
                                                <a href="shop-single.html">???? ????????????</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">???????? ????????????</a>
                                            <span class="product-price">199,000 ??????????</span>
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
                                                <a href="shop-single.html">?????????? ?????????? ?????? ???????? ?????? ??????</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                            <span class="product-price">135,000 ??????????</span>
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
                                                <a href="shop-single.html">?????????? ??????????</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                            <span class="product-price">145,000 ??????????</span>
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
                                                <a href="shop-single.html">?????????? ??????????</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                            <span class="product-price">170,000 ??????????</span>
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
                                                <a href="shop-single.html">?????????? ??????????</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                            <span class="product-price">185,000 ??????????</span>
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
                                                <a href="shop-single.html">?????????? ????????????</a>
                                            </h5>
                                            <a class="product-meta" href="shop-categories.html">???????? ????????????</a>
                                            <span class="product-price">54,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ??????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">157,000 ??????????</span>
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
                                        <a href="shop-single.html">???? ????????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ????????????</a>
                                    <span class="product-price">199,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ?????????? ?????? ???????? ?????? ??????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">135,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ??????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">145,000 ??????????</span>
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
                        <h3>?????? ???? ?????????????????? ???????? ???? ???????????????????????????? ??????????</h3>
                    </div>
                    <div class="category-section-slider dt-sl">
                        <div class="category-slider owl-carousel">
                            <div class="item">
                                <a href="#" class="promotion-category">
                                    <img src="./assets/img/category/notebook-computer.png" alt="">
                                    <h4 class="promotion-category-name">?????????? ??????????????</h4>
                                    <h6 class="promotion-category-quantity">???????????? ????????</h6>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="promotion-category">
                                    <img src="./assets/img/category/lifeline-in-a-heart-outline.png" alt="">
                                    <h4 class="promotion-category-name">?????????????? ?????????????? ?? ??????????</h4>
                                    <h6 class="promotion-category-quantity">?????????? ????????</h6>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="promotion-category">
                                    <img src="./assets/img/category/repair-tools.png" alt="">
                                    <h4 class="promotion-category-name">?????????????????????? ?? ??????????</h4>
                                    <h6 class="promotion-category-quantity">?????????? ????????</h6>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="promotion-category">
                                    <img src="./assets/img/category/hanbok.png" alt="">
                                    <h4 class="promotion-category-name">???? ?? ??????????</h4>
                                    <h6 class="promotion-category-quantity">???????????? ????????</h6>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="promotion-category">
                                    <img src="./assets/img/category/sofa.png" alt="">
                                    <h4 class="promotion-category-name">???????? ?? ????????????????</h4>
                                    <h6 class="promotion-category-quantity">???????????? ????????</h6>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="promotion-category">
                                    <img src="./assets/img/category/school-material.png" alt="">
                                    <h4 class="promotion-category-name">?????????? ?????????? ?? ??????</h4>
                                    <h6 class="promotion-category-quantity">?????????? ????????</h6>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="promotion-category">
                                    <img src="./assets/img/category/baby-girl.png" alt="">
                                    <h4 class="promotion-category-name">???????? ?? ??????????</h4>
                                    <h6 class="promotion-category-quantity">?????????? ????????</h6>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="promotion-category">
                                    <img src="./assets/img/category/adventurer.png" alt="">
                                    <h4 class="promotion-category-name">???????? ?? ??????</h4>
                                    <h6 class="promotion-category-quantity">?????????? ????????</h6>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#" class="promotion-category">
                                    <img src="./assets/img/category/restaurant-cutlery-circular-symbol-of-a-spoon-and-a-fork-in-a-circle.png"
                                        alt="">
                                    <h4 class="promotion-category-name">???????????? ?? ????????????????</h4>
                                    <h6 class="promotion-category-quantity">?????????? ????????</h6>
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
                        <h2>???? ???????? ????????????</h2>
                        <a href="#">???????????? ??????</a>
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
                                        <a href="shop-single.html">?????????? ??????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">157,000 ??????????</span>
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
                                        <a href="shop-single.html">???? ????????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ????????????</a>
                                    <span class="product-price">199,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ?????????? ?????? ???????? ?????? ??????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">135,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ??????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">145,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ??????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">170,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ??????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">185,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ????????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ????????????</a>
                                    <span class="product-price">54,000 ??????????</span>
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
                        <h2>???? ???????? ????????????</h2>
                        <a href="#">???????????? ??????</a>
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
                                        <a href="shop-single.html">?????????? ??????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">157,000 ??????????</span>
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
                                        <a href="shop-single.html">???? ????????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ????????????</a>
                                    <span class="product-price">199,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ?????????? ?????? ???????? ?????? ??????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">135,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ??????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">145,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ??????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">170,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ??????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ??????????</a>
                                    <span class="product-price">185,000 ??????????</span>
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
                                        <a href="shop-single.html">?????????? ????????????</a>
                                    </h5>
                                    <a class="product-meta" href="shop-categories.html">???????? ????????????</a>
                                    <span class="product-price">54,000 ??????????</span>
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
                        <h2>?????????????? ????</h2>
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
                                            <h3>???? ???????????? ?????????? ?????? k-m-5110</h3>
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
                                        <span>199,000 ??????????</span>
                                    </div>
                                    <div class="card-horizontal-product-buttons">
                                        <a href="#" class="btn btn-outline-info">???????????? ??????????</a>
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
                                            <h3>???? ???????????? ?????????? ?????? k-m-5110</h3>
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
                                        <span>199,000 ??????????</span>
                                    </div>
                                    <div class="card-horizontal-product-buttons">
                                        <a href="#" class="btn btn-outline-info">???????????? ??????????</a>
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
                                            <h3>???? ???????????? ?????????? ?????? k-m-5110</h3>
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
                                        <span>199,000 ??????????</span>
                                    </div>
                                    <div class="card-horizontal-product-buttons">
                                        <a href="#" class="btn btn-outline-info">???????????? ??????????</a>
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
                                            <h3>???? ???????????? ?????????? ?????? k-m-5110</h3>
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
                                        <span>199,000 ??????????</span>
                                    </div>
                                    <div class="card-horizontal-product-buttons">
                                        <a href="#" class="btn btn-outline-info">???????????? ??????????</a>
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
                                            <h3>???? ???????????? ?????????? ?????? k-m-5110</h3>
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
                                        <span>199,000 ??????????</span>
                                    </div>
                                    <div class="card-horizontal-product-buttons">
                                        <a href="#" class="btn btn-outline-info">???????????? ??????????</a>
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
                                            <h3>???? ???????????? ?????????? ?????? k-m-5110</h3>
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
                                        <span>199,000 ??????????</span>
                                    </div>
                                    <div class="card-horizontal-product-buttons">
                                        <a href="#" class="btn btn-outline-info">???????????? ??????????</a>
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
                                            <h3>???? ???????????? ?????????? ?????? k-m-5110</h3>
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
                                        <span>199,000 ??????????</span>
                                    </div>
                                    <div class="card-horizontal-product-buttons">
                                        <a href="#" class="btn btn-outline-info">???????????? ??????????</a>
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
                                            <h3>???? ???????????? ?????????? ?????? k-m-5110</h3>
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
                                        <span>199,000 ??????????</span>
                                    </div>
                                    <div class="card-horizontal-product-buttons">
                                        <a href="#" class="btn btn-outline-info">???????????? ??????????</a>
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
                                            <h3>???? ???????????? ?????????? ?????? k-m-5110</h3>
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
                                        <span>199,000 ??????????</span>
                                    </div>
                                    <div class="card-horizontal-product-buttons">
                                        <a href="#" class="btn btn-outline-info">???????????? ??????????</a>
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
@endsection