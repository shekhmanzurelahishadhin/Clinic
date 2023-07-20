@extends('frontend.master')
@section('title')
    About
@endsection
@section('content')

<!-- Content Wrapper Start -->
<main>

    <div class="it-breadcrumb__area fix">
        <div class="it-breadcrumb__bg" data-background="{{asset($about->banner_image)}}">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-xl-5 col-lg-4">
                        <div class="it-breadcrumb__left-content wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <h4 class="it-breadcrumb__title">About Us</h4>
                            <span><a href="{{route('front.page')}}">Home</a> / <b>About Us</b></span>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-7 col-lg-8">
                        <div class="it-breadcrumb__content text-center text-lg-start">
{{--                            <img src="{{asset($about->banner_image)}}" alt>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about__area p-relative pb-50 pt-100">
        <div class="about__shape d-none d-xxl-block">
            <span><i class="fal fa-briefcase-medical"></i></span>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 mb-50">
                    <div class="about__main-img p-relative">
                        <img class="w-100" src="{{asset($about->image1)}}" alt>
                        {{--                    <div class="about__img-content">--}}
                        {{--                        <h4>26+ Experince Working</h4>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-50">
                    <div class="about__content">
                        <div class="about__section-title p-relative pb-20">
                            <h4 class="section-subtitle wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">About Us</h4>
                            <div class="about__title-shape-wrap p-relative wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                <h2 class="section-title">{{$about->title??null}}</h2>
                                <div class="about-title-shape d-none d-md-block">
                                    <img src="{{asset('/')}}frontend/assets/img/slider/title-shape.png" alt>
                                </div>
                            </div>
                        </div>
                        {!! $about->details1??null !!}
                        <div class="about__button wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1s">
                            <a class="main-btn tp-btn-hover alt-color-orange" href="{{route('about.page')}}"><span>About more</span>
                                <b></b>
                                <i class="far fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team__area pt-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="team__section-title text-center pb-40">
                        <h4 class="section-subtitle wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">Our Managements</h4>
                        <div class="team__title-shape-wrap p-relative wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            @foreach($titles as $data)
                                @if($data->page == 'managements' )
                                    <h2 class="section-title">{{$data->title??null}}</h2>
                                @endif
                            @endforeach

                            <div class="team-title-shape">
                                <img src="{{asset('/')}}frontend/assets/img/slider/title-shape.png" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team__slider-wrapper">
                <div class="swiper-container team__slider-active">
                    <div class="swiper-wrapper">
                        @if(isset($managements))
                            @foreach($managements as $management)
                                <div class="swiper-slide">
                                    <div class="team__wrapper p-relative text-center">
                                        <div class="team__item-box grey-bg p-relative fix">
                                            <div class="team__circle"></div>
                                            <div class="team__item">
                                                <div class="team__main-img fix">
                                                    <img src="{{asset($management->image)}}" alt>
                                                </div>
                                            </div>
                                            <div class="team__social">
                                                <a href="{{$management->facebook??null}}"><i class="fab fa-facebook-f"></i></a>
                                                <a href="mailto:{{$management->email??null}}"><i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                                        </svg></i></a>
                                                <a href="{{$management->instagram??null}}"><i class="fab fa-instagram"></i></a>
                                                <a href="{{$management->youtube??null}}"><i class="fab fa-youtube"></i></a>
                                                <a href="{{$management->linkedIn??null}}"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                        <div class="team__img-text text-center">
                                            <h4><a href="">{{$management->name??null}}</a></h4>
                                            <span>{{$management->designation??null}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="team-slider-dots"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Content wrapper end -->
@endsection
