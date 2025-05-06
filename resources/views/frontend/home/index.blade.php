@extends('layouts.frontend.master')

@section('content')
    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url('{{ asset('frontend/assets/images/backgrounds/main-slider-1-1.jpg') }}');">
                    </div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="swiper-slide-inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h2> Travel & Adventures</h2>
                                    <p>Where Would You Like To Go?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url('{{ asset('frontend/assets/images/backgrounds/main-slider-1-2.jpg') }}');">
                    </div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="swiper-slide-inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h2> Travel & Adventures</h2>
                                    <p>Where Would You Like To Go?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url('{{ asset('frontend/assets/images/backgrounds/main-slider-1-3.jpg') }}');">
                    </div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="swiper-slide-inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h2> Travel & Adventures</h2>
                                    <p>Where Would You Like To Go?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

                <div class="main-slider-nav">
                    <div class="main-slider-button-prev"><span class="icon-right-arrow"></span></div>
                    <div class="main-slider-button-next"><span class="icon-right-arrow"></span></div>
                </div>
            </div>
    </section>

    <section class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-page__left">
                        <div class="about-page__img">
                            <img src="{{ asset('frontend/assets/images/resources/about-page-img.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-page__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Learn about us</span>
                            <h2 class="section-title__title">Dare to Explore with Tevily Agency</h2>
                        </div>
                        <p class="about-page__text-1">A Simply Perfect Place to Get Lost</p>
                        <p class="about-page__text-2">
                            We are trusted by our clients and have a reputation for the best services in the field.
                            Lorem ipsum is simply free text dolor sit amett consectetur adipiscing elit. It is a long
                            established fact that a reader will be distracted by the readable content of a page.
                        </p>

                        <style>
                            .custom-btn {
                                background-color: #e8604c !important;
                                color: #fff !important;
                                border: none;
                            }

                            .custom-btn:hover {
                                background-color: #787780 !important;
                                color: #fff !important;
                            }

                            .btn-wrapper {
                                text-align: center;
                                margin-top: 20px;
                            }
                        </style>

                        <div class="btn-wrapper">
                            <a class="thm-btn custom-btn" href="#">View More</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="destinations-two">
        <div class="destinations-two-shape wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
            <img src="{{ asset('frontend/assets/images/shapes/destinations-two-shape.png') }}" alt="">
        </div>
        <div class="container">
            <div class="destinations-two__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="destinations-two__top-left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Our Services</span>
                                <h2 class="section-title__title">Checkout Beautiful Places Around the World</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <!--Destinations Two Single-->
                                <div class="destinations-two__top-single wow fadeInUp" data-wow-delay="100ms">
                                    <div class="destinations-two__top-img">
                                        <img src="{{ asset('frontend/assets/images/resources/destinations-two-img-1.jpg') }}"
                                            alt="">
                                        <div class="destinations-two__top-content">
                                            <h2 class="destinations-two__top-title"><a
                                                    href="destinations-details.html">Trekking</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <!--Destinations Two Single-->
                                <div class="destinations-two__top-single wow fadeInUp" data-wow-delay="200ms">
                                    <div class="destinations-two__top-img">
                                        <img src="{{ asset('frontend/assets/images/resources/destinations-two-img-2.jpg') }}"
                                            alt="">
                                        <div class="destinations-two__top-content">
                                            <h2 class="destinations-two__top-title"><a
                                                    href="destinations-details.html">Nepal Tour</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="destinations-two__bottom">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <!--Destinations Two Single-->
                        <div class="destinations-two__top-single wow fadeInUp" data-wow-delay="100ms">
                            <div class="destinations-two__top-img">
                                <img src="{{ asset('frontend/assets/images/resources/destinations-two-img-3.jpg') }}"
                                    alt="">
                                <div class="destinations-two__top-content">
                                    <h2 class="destinations-two__top-title"><a href="destinations-details.html">Vehicle
                                            Rental Service</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <!--Destinations Two Single-->
                        <div class="destinations-two__top-single wow fadeInUp" data-wow-delay="200ms">
                            <div class="destinations-two__top-img">
                                <img src="{{ asset('frontend/assets/images/resources/destinations-two-img-4.jpg') }}"
                                    alt="">
                                <div class="destinations-two__top-content">
                                    <h2 class="destinations-two__top-title"><a href="destinations-details.html">Global
                                            Visa Service</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <!--Destinations Two Single-->
                        <div class="destinations-two__top-single wow fadeInUp" data-wow-delay="300ms">
                            <div class="destinations-two__top-img">
                                <img src="{{ asset('frontend/assets/images/resources/destinations-two-img-5.jpg') }}"
                                    alt="">
                                <div class="destinations-two__top-content">
                                    <h2 class="destinations-two__top-title"><a href="destinations-details.html">Cheap Air
                                            Ticket</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <!--Destinations Two Single-->
                        <div class="destinations-two__top-single wow fadeInUp" data-wow-delay="400ms">
                            <div class="destinations-two__top-banner">

                                <h2>View <span>All Services</span></h2>
                                <a class="thm-btn destinations-two__btn" href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="book-now">
        <div class="book-now-shape"
            style="background-image: url('{{ asset('frontend/assets/images/shapes/book-now-shape.png') }}');"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="book-now__inner">
                        <div class="book-now__left">
                            <p>Plan your trip with us</p>
                            <h2>Ready for an unforgettable tour?</h2>
                        </div>
                        <div class="book-now__right">
                            <a class="thm-btn book-now__btn" href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="news-two_left">
                        <div class="section-title text-left">
                            <h2 class="section-title__title">Latest News & Articles</h2>
                        </div>
                        <p class="news-two__text">There are many latest variations of passages don’t do available
                            but the majority have suffered alteration in some form, by injected humou or randomised.
                        </p>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="news-two__right">
                        <div class="news-two__carousel owl-theme owl-carousel">
                            <!--News One Single-->
                            <div class="news-one__single wow fadeInUp" data-wow-delay="100ms">
                                <div class="news-one__img">
                                    <img src="{{ asset('frontend/assets/images/blog/news-one-img-1.jpg') }}"
                                        alt="">
                                    <a href="news-details.html"><span class="news-one__plus"></span></a>
                                    <div class="news-one__date">
                                        <p>28 <br> <span>Aug</span></p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title"><a href="news-details.html">Things to See and Do When
                                            Visiting Japan</a></h3>
                                </div>
                            </div>
                            <!--News One Single-->
                            <div class="news-one__single wow fadeInUp" data-wow-delay="200ms">
                                <div class="news-one__img">
                                    <img src="{{ asset('frontend/assets/images/blog/news-one-img-2.jpg') }}"
                                        alt="">
                                    <a href="news-details.html"><span class="news-one__plus"></span></a>
                                    <div class="news-one__date">
                                        <p>28 <br> <span>Aug</span></p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title"><a href="news-details.html">Journeys are Best Measured in
                                            New Friends</a></h3>
                                </div>
                            </div>
                            <!--News One Single-->
                            <div class="news-one__single wow fadeInUp" data-wow-delay="300ms">
                                <div class="news-one__img">
                                    <img src="{{ asset('frontend/assets/images/blog/news-one-img-3.jpg') }}"
                                        alt="">
                                    <a href="news-details.html"><span class="news-one__plus"></span></a>
                                    <div class="news-one__date">
                                        <p>28 <br> <span>Aug</span></p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title"><a href="news-details.html">Travel the Most Beautiful
                                            Places in the World</a></h3>
                                </div>
                            </div>
                        </div>
                        {{-- Centered Button --}}
                        <div style="text-align: center; margin-top: 30px;">
                            <style>
                                .custom-btn {
                                    background-color: #e8604c !important;
                                    color: #fff !important;
                                    border: none;
                                    padding: 12px 30px;
                                    display: inline-block;
                                    transition: background-color 0.3s ease;
                                }

                                .custom-btn:hover {
                                    background-color: #787780 !important;
                                    color: #fff !important;
                                }
                            </style>
                            <a class="thm-btn custom-btn" href="#">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
