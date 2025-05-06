@extends('layouts.frontend.master')

@section('content')
    <main class="flex-grow-1">
        <!-- Breadcrumb Section with Background Image -->
        <section class="page-header">
            <div class="page-header__top">
                <div class="page-header-bg"
                    style="background-image: url('{{ asset('frontend/assets/images/backgrounds/page-header-bg.jpg') }}')">
                </div>
                <div class="page-header-bg-overly">
                </div>
                <div class="container">
                    <div class="page-header__top-inner">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>.</span></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Talk with our team</span>
                                <h2 class="section-title__title">Any Question? Feel Free to Contact</h2>
                            </div>
                            <div class="contact-page__social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="comment-form">
                                <form class="comment-one__form contact-form-validated"
                                    action="https://tevily-html.vercel.app/inc/sendemail.php">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <textarea name="message" placeholder="Write Comment"></textarea>
                                            </div>
                                            <button class="thm-btn comment-form__btn" type="submit">Send a
                                                message</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div><!-- /.result -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Information Start-->
        <section class="information">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Information Single-->
                        <div class="information__single">
                            <div class="information__icon">
                                <span class="icon-place"></span>
                            </div>
                            <div class="information__text">
                                <p>88 Broklyn Street <br> Road New York. USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Information Single-->
                        <div class="information__single">
                            <div class="information__icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="information__text">
                                <h4>
                                    <a class="information__number-1" href="tel:+92-666-888-0000">+92 666 888 0000</a>
                                    <br>
                                    <a class="information__number-2" href="tel:666-888-0000">666 888 0000</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Information Single-->
                        <div class="information__single">
                            <div class="information__icon">
                                <span class="icon-at"></span>
                            </div>
                            <div class="information__text">
                                <h4>
                                    <a class="information__mail-1" href="mailto:needhelp@tevily.com">needhelp@tevily.com</a>
                                    <br>
                                    <a class="information__mail-2" href="mailto:info@tevily.com">info@tevily.com</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Information End-->

        <!--Google Map Start-->
        <section class="contact-page-google-map">
            <iframe class="contact-page-google-map__one"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                allowfullscreen></iframe>

        </section>
    @endsection
