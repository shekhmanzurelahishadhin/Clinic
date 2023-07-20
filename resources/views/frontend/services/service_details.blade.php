@extends('frontend.master')
@section('title')
    details
@endsection
@section('content')

    <main>

        <div class="it-breadcrumb__area fix">
            <div class="it-breadcrumb__bg" data-background="{{asset($service->banner_image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-7 col-xl-5 col-lg-4">
                            <div class="it-breadcrumb__left-content wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                <h4 class="it-breadcrumb__title">Details</h4>
                                <span><a href="{{route('front.page')}}">Home</a> / <b>Details</b></span>
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
        <div class="contact__area mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="contact__item d-flex p-relative fix">
                            <div class="contact__item-shape">
                                <img src="{{asset('/')}}frontend/assets/img/contact/contact-shape.png" alt>
                            </div>
                            <div class="contact__content">
                                <h4 class="contact__title-sm">BKash</h4>
                                <a class="contact__content-text" href=""><span class="" data-cfemail="">{{$number->bkash??null}}</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="contact__item d-flex p-relative fix">
                            <div class="contact__item-shape">
                                <img src="{{asset('/')}}frontend/assets/img/contact/contact-shape.png" alt>
                            </div>

                            <div class="contact__content">
                                <h4 class="contact__title-sm">Nagad</h4>
                                <a class="contact__content-text" href="">{{$number->nagad??null}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="contact__item d-flex p-relative fix">

                            <div class="contact__item-shape">
                                <img src="{{asset('/')}}frontend/assets/img/contact/contact-shape.png" alt>
                            </div>
                            <div class="contact__content">
                                <h4 class="contact__title-sm">Rocket</h4>
                                <a class="contact__content-text" href="">{{$number->rocket??null}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="it-service-details__area">
            <div class="container">
                <div class="row">

                    <div class="col-xl-12">
                        <div class="it-service-details__item">
                            <div class="it-service-details__item-img wow tpfadeUp mt-5" data-wow-duration=".9s" data-wow-delay=".7s">
                                <img src="{{asset($service->details_image1)}}" alt>
                            </div>
                            <a class="btn text-light d-inline-block py-3 my-3" href="{{route('package.appointment',['id'=>$service->id])}}" style="background-color: #172B4C">
                                Appointment Now
                            </a>
                            <p><b>Price:</b>&nbsp;{{$service->price??null}}</p>
                            {!! $service->service_details_small !!}
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-7 wow tpfadeUp my-5" data-wow-duration=".9s" data-wow-delay="1.3s">
                        <div class="service__item-wrapper service__details active">
{{--                            {!! $service->service_details1 !!}--}}
                            <div class="service__main-img">
                                <img src="{{asset($service->details_image2)}}" alt>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 wow tpfadeUp my-5" data-wow-duration=".9s" data-wow-delay="1.3s">
                        <div class="it-service-details__right-side">
                            <div class="laboratory__content-box pt-25 pb-35 d-flex align-items-center">

                                <div class="laboratory__content-img-text">
                                    {!! $service->service_details1 !!}
                                </div><div class="laboratory__content-img pr-30">

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 wow tpfadeUp my-5" data-wow-duration=".9s" data-wow-delay="1.3s">
                        <div class="it-service-details__right-side">
                            <div class="laboratory__content-box pt-25 pb-35 d-flex align-items-center">

                                <div class="laboratory__content-img-text">
                                    {!! $service->service_details2 !!}
                                </div><div class="laboratory__content-img pr-30">

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-7 wow tpfadeUp my-5" data-wow-duration=".9s" data-wow-delay="1.3s">
                        <div class="service__item-wrapper service__details active">
                            {{--                            {!! $service->service_details1 !!}--}}
                            <div class="service__main-img">
                                <img src="{{asset($service->details_image3)}}" alt>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 my-5">
                        {!! $service->service_details3 !!}
                    </div>
                    <p><b>Price:</b>&nbsp;{{$service->price??null}}</p>

                    <a class="btn text-light d-inline-block py-3 my-3" href="{{route('package.appointment',['id'=>$service->id])}}" style="background-color: #172B4C">
                        Appointment Now
                    </a>
                </div>
            </div>
        </div>



    </main>
@endsection
