<div class="slider__area">
    <div class="slider-active">
        @foreach($banners as $banner)
        <div class="slider__bg slider__overly p-relative" data-background="{{asset($banner->image1)}}">
            <div class="slider__social-box" style="left: -3%;">
                <span></span>
                <a href="{{$links->facebook}}"><i class="fab fa-facebook-f"></i></a>
                <a href="{{$links->linkedIn}}"><i class="fab fa-linkedin"></i></a>
                <a href="{{$links->youtube}}"><i class="fab fa-youtube"></i></a>
                <a href="{{$links->instagram}}"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-12">
                        <div class="slider__content-box z-index">
                            <div class="slider__section-title pb-10">

                                <div class="slider__title-shape-wrap p-relative">
                                    <h2 class="hero-title ">
                                        {{$banner->title}}
                                    </h2>
                                    <div class="slider__title-shape">
                                        <img src="{{asset('/')}}frontend/assets/img/slider/title-shape.png" alt>
                                    </div>
                                </div>
                            </div>
                            <div class="slider__content-text">
                                <p>{{$banner->short_details}}</p>
                            </div>
                            <div class="slider__button">
                                <a class="main-btn" href="{{route('appointment.page')}}">Make Appointment<i class="far fa-plus"></i></a>
                            </div>
                            <div class="slider__social-box-2">
                                <span></span>
                                <a href="{{$links->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{$links->linkedIn}}"><i class="fab fa-linkedin"></i></a>
                                <a href="{{$links->youtube}}"><i class="fab fa-youtube"></i></a>
                                <a href="{{$links->instagram}}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
{{--        <div class="slider__bg slider__overly p-relative" data-background="{{asset('/')}}frontend/assets/img/slider/slider-2.png">--}}
{{--            <div class="slider__social-box d-none d-md-block">--}}
{{--                <span>Follow Social :</span>--}}
{{--                <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--            </div>--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-12">--}}
{{--                        <div class="slider__content-box z-index">--}}
{{--                            <div class="slider__section-title pb-10">--}}
{{--                                <h4 class="section-subtitle text-white">Wellcome To Medical!</h4>--}}
{{--                                <div class="slider__title-shape-wrap p-relative">--}}
{{--                                    <h2 class="hero-title ">Best of Practice Place--}}
{{--                                        Medical <span>Doctor.</span>--}}
{{--                                    </h2>--}}
{{--                                    <div class="slider__title-shape">--}}
{{--                                        <img src="{{asset('/')}}frontend/assets/img/slider/title-shape.png" alt>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="slider__content-text">--}}
{{--                                <p>Today, Barry’s is on the cusp of continued global expansion with over<br>--}}
{{--                                    100,000 members working out weekly in studios</p>--}}
{{--                            </div>--}}
{{--                            <div class="slider__button">--}}
{{--                                <a class="main-btn" href="contact.html">Make Appointment<i class="far fa-plus"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="slider__bg slider__overly p-relative" data-background="{{asset('/')}}frontend/assets/img/slider/slider-5.png">--}}
{{--            <div class="slider__social-box d-none d-md-block">--}}
{{--                <span>Follow Social :</span>--}}
{{--                <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--            </div>--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-12">--}}
{{--                        <div class="slider__content-box z-index">--}}
{{--                            <div class="slider__section-title pb-10">--}}
{{--                                <h4 class="section-subtitle text-white">Wellcome To Medical!</h4>--}}
{{--                                <div class="slider__title-shape-wrap p-relative">--}}
{{--                                    <h2 class="hero-title ">Best of Practice Place--}}
{{--                                        Medical <span>Doctor.</span>--}}
{{--                                    </h2>--}}
{{--                                    <div class="slider__title-shape">--}}
{{--                                        <img src="{{asset('/')}}frontend/assets/img/slider/title-shape.png" alt>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="slider__content-text">--}}
{{--                                <p>Today, Barry’s is on the cusp of continued global expansion with over<br>--}}
{{--                                    100,000 members working out weekly in studios</p>--}}
{{--                            </div>--}}
{{--                            <div class="slider__button">--}}
{{--                                <a class="main-btn" href="#">Make Appointment<i class="far fa-plus"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="slider__bg slider__overly p-relative" data-background="{{asset('/')}}frontend/assets/img/slider/slider-1.png">--}}
{{--            <div class="slider__social-box d-none d-md-block">--}}
{{--                <span>Follow Social :</span>--}}
{{--                <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--            </div>--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-12">--}}
{{--                        <div class="slider__content-box z-index">--}}
{{--                            <div class="slider__section-title pb-10">--}}
{{--                                <h4 class="section-subtitle slider__subtitle text-white">Wellcome To Medical!</h4>--}}
{{--                                <div class="slider__title-shape-wrap p-relative">--}}
{{--                                    <h2 class="hero-title ">Best of Practice Place--}}
{{--                                        Medical <span>Doctor.</span>--}}
{{--                                    </h2>--}}
{{--                                    <div class="slider__title-shape">--}}
{{--                                        <img src="{{asset('/')}}frontend/assets/img/slider/title-shape.png" alt>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="slider__content-text">--}}
{{--                                <p>Today, Barry’s is on the cusp of continued global expansion with over<br>--}}
{{--                                    100,000 members working out weekly in studios</p>--}}
{{--                            </div>--}}
{{--                            <div class="slider__button">--}}
{{--                                <a class="main-btn" href="#">Make Appointment<i class="far fa-plus"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
