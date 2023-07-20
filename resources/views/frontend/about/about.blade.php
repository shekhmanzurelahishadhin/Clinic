<div class="about__area p-relative pb-50">
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
