@extends('frontend.master')
@section('title')
    About
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/gallery-assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/gallery-assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/gallery-assets/css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/gallery-assets/css/off-canvas.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/gallery-assets/fonts/css/linea-fonts.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/gallery-assets/fonts/css/flaticon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/gallery-assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/gallery-assets/css/rsmenu-main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/gallery-assets/css/rs-spacing.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/gallery-assets/css/responsive.css') }}">
<div class="content-wrapper">
<!-- Breadcrumb Start -->
    <div class="it-breadcrumb__area fix">
        <div class="it-breadcrumb__bg" data-background="{{asset($banner->image)}}">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-xl-5 col-lg-5">
                        <div class="it-breadcrumb__left-content wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <h4 class="it-breadcrumb__title">Gallery</h4>
                            <span><a href="{{route('front.page')}}" class="text-light text-decoration-none">Home </a> / <b>Gallery</b></span>
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
<!-- Events Section Start -->
<div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row margin-0">
            @foreach($galleries as $gallery)
                <div class="col-lg-4 mb-0 padding-0 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{asset($gallery->image)}}"><img src="{{asset($gallery->image)}}" alt=""></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Events Section End -->

</div>
<script src="{{ asset('frontend/gallery-assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/gallery-assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/gallery-assets/js/rsmenu-main.js') }}"></script>
<script src="{{ asset('frontend/gallery-assets/js/jquery.nav.js') }}"></script>
<script src="{{ asset('frontend/gallery-assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/gallery-assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/gallery-assets/js/contact.form.js') }}"></script>
<script src="{{ asset('frontend/gallery-assets/js/modernizr-2.8.3.min.js') }}"></script>
<script src="{{ asset('frontend/gallery-assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/gallery-assets/js/main.js') }}"></script>
@endsection
