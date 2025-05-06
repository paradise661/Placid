@extends('layouts.frontend.master')

@section('content')
    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg"
                style="background-image:url('{{ asset('frontend/assets/images/backgrounds/page-header-bg.jpg') }}')">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>About</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span>.</span></li>
                        <li class="active">About</li>
                    </ul>
                </div>
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

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-one about-page-testimonial">
        <div class="about-page-testimonial-map"
            style="background-image: url(assets/images/shapes/about-page-testimonial-map.png)"></div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Testimonials & reviews</span>
                <h2 class="section-title__title">What They’re Saying</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-one__carousel owl-theme owl-carousel">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-one-img-1.png') }}"
                                    alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">This is due to their best service, pricing and
                                    customer support. It’s throughly refresing to such a personal touch. Duis aute
                                    irure lupsum reprehenderit.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Shirley Smith</h3>
                                    <p class="testimonial-one__client-title">Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-one-img-2.png') }}"
                                    alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">This is due to their best service, pricing and
                                    customer support. It’s throughly refresing to such a personal touch. Duis aute
                                    irure lupsum reprehenderit.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Kevin Martin</h3>
                                    <p class="testimonial-one__client-title">Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-one-img-3.png') }}"
                                    alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">This is due to their best service, pricing and
                                    customer support. It’s throughly refresing to such a personal touch. Duis aute
                                    irure lupsum reprehenderit.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Jessica Brown</h3>
                                    <p class="testimonial-one__client-title">Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-one-img-1.png') }}"
                                    alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">This is due to their best service, pricing and
                                    customer support. It’s throughly refresing to such a personal touch. Duis aute
                                    irure lupsum reprehenderit.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Shirley Smith</h3>
                                    <p class="testimonial-one__client-title">Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-one-img-2.png') }}"
                                    alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">This is due to their best service, pricing and
                                    customer support. It’s throughly refresing to such a personal touch. Duis aute
                                    irure lupsum reprehenderit.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Kevin Martin</h3>
                                    <p class="testimonial-one__client-title">Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-one-img-3.png') }}"
                                    alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">This is due to their best service, pricing and
                                    customer support. It’s throughly refresing to such a personal touch. Duis aute
                                    irure lupsum reprehenderit.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Jessica Brown</h3>
                                    <p class="testimonial-one__client-title">Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-one-img-1.png') }}"
                                    alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">This is due to their best service, pricing and
                                    customer support. It’s throughly refresing to such a personal touch. Duis aute
                                    irure lupsum reprehenderit.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Shirley Smith</h3>
                                    <p class="testimonial-one__client-title">Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-one-img-2.png') }}"
                                    alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">This is due to their best service, pricing and
                                    customer support. It’s throughly refresing to such a personal touch. Duis aute
                                    irure lupsum reprehenderit.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Kevin Martin</h3>
                                    <p class="testimonial-one__client-title">Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-one-img-3.png') }}"
                                    alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">This is due to their best service, pricing and
                                    customer support. It’s throughly refresing to such a personal touch. Duis aute
                                    irure lupsum reprehenderit.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Jessica Brown</h3>
                                    <p class="testimonial-one__client-title">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose">
        <div class="why-choose__container">
            <!-- Left Side (Centered) -->
            <div class="why-choose__left" style="display: flex; align-items: center;">
                <div class="why-choose__right-map"
                    style="background-image: url('{{ asset('frontend/assets/images/shapes/why-choose-right-map.png') }}');">
                </div>
                <div class="why-choose__right-content">
                    <div class="section-title text-right">
                        <h2 class="section-title__title">Our Mission</h2>
                    </div>
                    <p class="why-choose__right-text">
                        There are many variations of passages of Lorem Ipsum is simply
                        free text available in the market for you, but the majority have suffered alteration in some form.
                    </p>
                    {{-- <ul class="list-unstyled why-choose__list">
                        <li>
                            <div class="icon">
                                <span class="icon-travel"></span>
                            </div>
                            <div class="text">
                                <h4>Professional and Certified</h4>
                                <p>Lorem ipsum is simply free text dolor sit but the majority have suffered amet,
                                    consectetur notted.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-travel-map"></span>
                            </div>
                            <div class="text">
                                <h4>Get Instant Tour Bookings</h4>
                                <p>Lorem ipsum is simply free text dolor sit but the majority have suffered amet,
                                    consectetur notted.</p>
                            </div>
                        </li>
                    </ul> --}}
                </div>
            </div>

            <!-- Right Side (Same) -->
            <div class="why-choose__right">
                <div class="why-choose__right-map"
                    style="background-image: url('{{ asset('frontend/assets/images/shapes/why-choose-right-map.png') }}');">
                </div>
                <div class="why-choose__right-content">
                    <div class="section-title text-right">
                        <h2 class="section-title__title">Our Vision</h2>
                    </div>
                    <p class="why-choose__right-text">
                        There are many variations of passages of Lorem Ipsum is simply
                        free text available in the market for you, but the majority have suffered alteration in some form.
                    </p>
                    {{-- <ul class="list-unstyled why-choose__list">
                        <li>
                            <div class="icon">
                                <span class="icon-travel"></span>
                            </div>
                            <div class="text">
                                <h4>Professional and Certified</h4>
                                <p>Lorem ipsum is simply free text dolor sit but the majority have suffered amet,
                                    consectetur notted.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-travel-map"></span>
                            </div>
                            <div class="text">
                                <h4>Get Instant Tour Bookings</h4>
                                <p>Lorem ipsum is simply free text dolor sit but the majority have suffered amet,
                                    consectetur notted.</p>
                            </div>
                        </li>
                    </ul> --}}
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
@endsection
