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
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span>.</span></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="destinations-one destinations-page">
        <div class="container">
            <div class="row masonary-layout">
                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="{{ asset('frontend/assets/images/destination/destination-1-4.png') }}" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a href="destinations-details.html">Trekking/Hiking</a>
                                </h2>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="{{ asset('frontend/assets/images/destination/destination-1-5.png') }}" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a href="destinations-details.html">Switzerland</a></h2>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="{{ asset('frontend/assets/images/destination/destination-1-5.png') }}" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a href="destinations-details.html">Switzerland</a></h2>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="{{ asset('frontend/assets/images/destination/destination-1-4.png') }}" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a href="destinations-details.html">Trekking/Hiking</a>
                                </h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
