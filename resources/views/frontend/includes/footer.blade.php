<footer>

    <div class="footer__area pb-50 footer__bg p-relative" data-background="{{asset($footer->footer_image)}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="footer__widget footer-col-1 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="footer__logo">
                            <a href="index.html">
{{--                                @php $logo = \App\Models\Logo::latest()->first() @endphp--}}
                                <img src="{{asset($logo->footer_logo_image??null)}}" alt="homepage" class="dark-logo" />

                            </a>
                        </div>
                        <div class="footer__social-box">
                            <p>{{$footer->details}}</p>
                            <span>Social Media:</span>
                            <a href="{{$links->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{$links->linkedIn}}"><i class="fab fa-linkedin"></i></a>
                            <a href="{{$links->youtube}}"><i class="fab fa-youtube"></i></a>
                            <a href="{{$links->instagram}}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="footer__widget footer__mt footer-col-2 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <h4 class="footer__title-sm">Services</h4>

                            <ul style="list-style-type: none!important; color: white!important;">

                                @foreach($footer_services as $service)
                                <li style="padding: 5px 0px;color: white!important;"><a href="{{route('services.details',['id'=>$service->id])}}" class="text-light text-decoration-none">{{$service->service_title}}</a></li>
                                @endforeach
                            </ul>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="footer__widget footer__mt footer__widget-space footer-col-3 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <h4 class="footer__title-sm">Recent Post</h4>
                        @foreach($footer_blogs as $blog)
                        <div class="footer__content-box d-flex align-items-center">
                            <div class="footer__content-img">
                                <img src="{{asset($blog->main_image)}}" width="80px" height="80px" alt>
                            </div>
                            <div class="footer__content-info">
                                <h5>{{$blog->title}}</h5>
                                @php $timestamp = strtotime($blog->created_at); $month = date('M', $timestamp);$year = date('Y', $timestamp)@endphp
                                <span><i class="fal fa-calendar-alt"></i>{{ $month }},{{ $blog->created_at->format('d') }}, {{ $year }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright__area copyright__bg-2">
            <div class="container">
                <div class="copyright__bg z-index">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="copyright__text text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1s">
                                <span>© {{$footer->credit}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</footer>
