@extends('frontend.master')
@section('title')
    Blogs
@endsection
@section('content')

    <!-- Content Wrapper Start -->
    <main>

        <div class="it-breadcrumb__area fix">
            <div class="it-breadcrumb__bg" data-background="{{asset($banner->image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-7 col-xl-5 col-lg-5">
                            <div class="it-breadcrumb__left-content wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                <h4 class="it-breadcrumb__title">Blogs</h4>
                                <span><a href="{{route('front.page')}}">Home </a> / <b>Blogs</b></span>
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


        <div class="blog__area pt-100 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="blog__section-box text-center pb-40">
                            <h4 class="section-subtitle wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">Our Blog News</h4>
                            <div class="blog__title-shape-wrap p-relative wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                @foreach($titles as $data)
                                    @if($data->page == 'blogs' )

                                        <h3 class="section-title-2 pb-15 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                            {{$data->title}}</h3>
                                    @endif
                                @endforeach
                                <div class="blog-title-shape">
                                    <img src="assets/img/slider/title-shape.png" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-xl-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="swiper-slide">
                            <div class="blog__item">
                                <div class="blog__item-img p-relative">
                                    <a href="#"><img class="w-100" src="{{asset($blog->main_image)}}" alt></a>

                                </div>
                                <div class="blog__content-box">
                                    <div class="blog__category">
                                        @php $timestamp = strtotime($blog->created_at); $month = date('M', $timestamp);$year = date('Y', $timestamp)@endphp
                                        <span><i class="fal fa-calendar-alt"></i>{{ $month }},{{ $blog->created_at->format('d') }}, {{ $year }}</span>
                                    </div>
                                    <div class="blog__content">
                                        <h4 class="blog__title-sm"><a href="">{{$blog->title}}</a></h4>
                                        <p>{!! $blog->short_details !!}</p>
                                        <div class="blog__link">
                                            <a href="{{route('blogs.details',['id'=>$blog->id])}}"><i class="fas fa-arrow-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{$blogs->links()}}
            </div>
        </div>


    </main>
    <!-- Content wrapper end -->
@endsection
