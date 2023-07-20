@extends('frontend.master')
@section('title')
    Managements
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
                                <h4 class="it-breadcrumb__title">Management</h4>
                                <span><a href="{{route('front.page')}}" class="text-light text-decoration-none">Home </a> / <b>Management</b></span>
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

        <!-- Team Section Start -->
        <section class="team-wrap ptb-100 my-5">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($managements as $management)
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
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
                        </div>
                    @endforeach

                </div>
                {!! $managements->links() !!}
            </div>
        </section>
        <!-- Team Section End -->

    </div>
    <!-- Content wrapper end -->
    {{--    <script src="https://cdn.tailwindcss.com"></script>--}}
@endsection
