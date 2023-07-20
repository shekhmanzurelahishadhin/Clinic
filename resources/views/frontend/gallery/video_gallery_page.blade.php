@extends('frontend.master')
@section('title')
    Services
@endsection
@section('content')

    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="it-breadcrumb__area fix">
            <div class="it-breadcrumb__bg" data-background="{{asset($banner->image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-7 col-xl-5 col-lg-5">
                            <div class="it-breadcrumb__left-content wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                <h4 class="it-breadcrumb__title">Video Gallery</h4>
                                <span><a href="{{route('front.page')}}" class="text-light text-decoration-none">Home </a> / <b>Video Gallery</b></span>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-7 col-lg-7">
                            <div class="it-breadcrumb__content text-center text-lg-start">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Service Section Start -->
        <section class="service-wrap ptb-100">
            <div class="container">
                <div class="row my-5">
                    @foreach($galleries as $gallery)
                        <div class="col-lg-6 col-12">
                            {!! $gallery->video_link !!}
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!-- Service Section End -->

    </div>
    <!-- Content wrapper end -->
@endsection
