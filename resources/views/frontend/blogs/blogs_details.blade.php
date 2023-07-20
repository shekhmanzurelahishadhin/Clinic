@extends('frontend.master')
@section('title')
    details
@endsection
@section('content')

    <!-- Content Wrapper Start -->
    <main>

        <div class="it-breadcrumb__area fix">
            <div class="it-breadcrumb__bg" data-background="{{asset($blog->banner_image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-7 col-xl-5 col-lg-5">
                            <div class="it-breadcrumb__left-content wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                <h4 class="it-breadcrumb__title">Blog Details</h4>
                                <span><a href="{{route('front.page')}}">Home </a>/ <b>Blog Details</b></span>
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


        <div class="postbox__area pt-100 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="postbox__details-wrapper pr-20">
                            <article>
                                <div class="postbox__thumb w-img wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                    <a href="">
                                        <img src="{{asset($blog->details_image1)}}" alt>
                                    </a>
                                </div>
                                {!! $blog->details1 !!}
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <img src="{{asset($blog->details_image2)}}" width="100%" alt="Image">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <img src="{{asset($blog->details_image3)}}" width="100%" alt="Image">
                                    </div>
                                </div>

                                {!! $blog->details2 !!}
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <!-- Content wrapper end -->
@endsection
