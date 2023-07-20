<header>

{{--    <div class="notification__area notification__ptb theme-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-sm-block">--}}
{{--                    <div class="notification__text">--}}
{{--                        <span>News Hedline To Medical Doctor →</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">--}}
{{--                    <div class="notification__list text-center text-sm-end">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">Help desk</a></li><li><a href="#">Emergency</a></li><li><a href="#">Contact</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div id="header-sticky" class="header__area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-6 col-md-6 col-6">
                    <div class="header__logo">
{{--                        @php $logo = \App\Models\Logo::latest()->first() @endphp--}}
                        <a href="{{route('front.page')}}"><img src="{{asset($logo->frontend_logo_image??null)}}" alt></a>
                    </div>
                </div>
                <div class="col-xl-9 d-none d-xl-block">
                    <div class="header__main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="" style="padding-right: 25px"><a href="{{route('front.page')}}" class="text-decoration-none" style="{{Request::routeIs('front.page') ? 'color:#40D0C6' : ''}}" >Home</a></li>
                                <li class="" style="padding-right: 30px;padding-left: 0px;"><a href="{{route('about.page')}}" style="{{Request::routeIs('about.page') ? 'color:#40D0C6' : ''}}" class="text-decoration-none">About</a></li>
                                <li class="" style="padding-right: 30px;padding-left: 0px;"><a href="{{route('services')}}" style="{{Request::routeIs('services') ? 'color:#40D0C6' : ''}}" class="text-decoration-none">Service</a></li>
                                <li class="" style="padding-right: 30px;padding-left: 0px;"><a href="{{route('team.page')}}" style="{{Request::routeIs('team.page') ? 'color:#40D0C6' : ''}}" class="text-decoration-none">Doctors</a></li>
                                <li class="" style="padding-right: 30px;padding-left: 0px;"><a href="{{route('blogs.page')}}" style="{{Request::routeIs('blogs.page') ? 'color:#40D0C6' : ''}}" class="text-decoration-none">Blog</a></li>
                                <li class="" style="padding-right: 30px;padding-left: 0px;"><a href="{{route('medicine.page')}}" style="{{Request::routeIs('medicine.page') ? 'color:#40D0C6' : ''}}" class="text-decoration-none">Medicine Store</a></li>
                                <li class="has-dropdown" style="margin-right: 30px;padding-left: 0px;"><a href="" style="@if(Request::routeIs('gallery.page')) color:#40D0C6 @elseif(Request::routeIs('video.gallery.page')) color:#40D0C6 @endif" class="text-decoration-none">Gallery</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('gallery.page')}}" class="text-decoration-none">Photo Gallery</a></li>
                                        <li><a href="{{route('video.gallery.page')}}" class="text-decoration-none">Video Gallery</a></li>
                                    </ul>
                                </li>
{{--                                <li class="" style="padding-right: 30px;padding-left: 0px;"><a href="{{route('management.page')}}" style="{{Request::routeIs('management.page') ? 'color:#40D0C6' : ''}}" class="text-decoration-none">Management</a></li>--}}
                                <li class="" style="padding-right: 30px;padding-left: 0px;"><a href="{{route('appointment.page')}}" style="{{Request::routeIs('appointment.page') ? 'color:#40D0C6' : ''}}" class="text-decoration-none">Appointments</a></li>
                                <li style="padding-right: 0px;padding-left: 0px;"><a href="{{route('contacts')}}" style="{{Request::routeIs('contacts') ? 'color:#40D0C6' : ''}}" class="text-decoration-none">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-6 col-md-6 col-6">
                    <div class="header__content-box d-flex justify-content-end">
                        <div class="header__search-box p-relative d-none d-md-block">
                            {{--                            <form action="#">--}}
                            {{--                                <input type="search" placeholder="Search">--}}
                            {{--                                <div class="header__search-icon">--}}
                            {{--                                    <span><i class="fal fa-search"></i></span>--}}
                            {{--                                </div>--}}
                            {{--                            </form>--}}
                        </div>
                        @if(Auth::user()!=null)
                        <div class="header__bars pl-20 d-lg-none">
                            <button class="it-menu-bar">
                                <svg id="header_area" data-name="header area" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 30 30">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #181717;
                                                fill-opacity: 0;
                                                stroke: #898989;
                                                stroke-width: 1px;
                                            }

                                            .cls-2 {
                                                fill: #898989;
                                            }
                                        </style>
                                    </defs>
                                    <g id="button">
                                        <rect id="button-2" data-name="button" class="cls-1" width="30" height="30" rx="2" ry="2" />
                                        <circle id="button-3" data-name="button" class="cls-2" cx="8.5" cy="8.5" r="2.5" />
                                        <circle id="button-4" data-name="button" class="cls-2" cx="15.5" cy="8.5" r="2.5" />
                                        <circle id="button-5" data-name="button" class="cls-2" cx="22.5" cy="8.5" r="2.5" />
                                        <circle id="button-6" data-name="button" class="cls-2" cx="22.5" cy="15.5" r="2.5" />
                                        <circle id="button-7" data-name="button" class="cls-2" cx="15.5" cy="15.5" r="2.5" />
                                        <circle id="button-8" data-name="button" class="cls-2" cx="8.5" cy="15.5" r="2.5" />
                                        <circle id="button-9" data-name="button" class="cls-2" cx="8.5" cy="22.5" r="2.5" />
                                        <circle id="button-10" data-name="button" class="cls-2" cx="15.5" cy="22.5" r="2.5" />
                                        <circle id="button-11" data-name="button" class="cls-2" cx="22.5" cy="22.5" r="2.5" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                        @else
                            <a class="" style="background-color: #40D0C6;color: white;padding: 8px 10px;border-radius: 3px" href="{{route('login')}}">Login</a>
                        @endif

                        <div class="header__bars pl-20 d-none d-lg-inline-block">
                            @if(Auth::user()!=null)
                                @if(Auth::user()->is_admin == 0)
                            <button class="it-menu-bar">
                                <svg xmlns="http://www.w3.org/2000/svg" style="color: #40D0C6" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                            </button>
                                @endif
{{--                            @else--}}

{{--                                <a class="main-btn" href="{{route('login')}}">Login</a>--}}
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<div class="it-offcanvas-area">
    <div class="itoffcanvas">
        <div class="it-offcanva-bottom-shape d-none d-xxl-block">
            <img src="https://ordainit.com/" alt>
        </div>
        <div class="itoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
{{--        <div class="itoffcanvas__logo">--}}
{{--            <a href="{{route('front.page')}}">--}}
{{--                @php $logo = \App\Models\Logo::latest()->first() @endphp--}}
{{--                <img src="{{asset($logo->logo_image)}}" alt>--}}
{{--            </a>--}}
{{--        </div>--}}

        <div class="mobile-menu mt-20"></div>
        <div class="itoffcanvas__info">
            <h3 class="offcanva-title">Welcome! {{Auth::user()->name??null}}</h3>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
                <a href="{{route('user.profile.settings')}}" style="{{Request::routeIs('user.profile.settings') ? 'color:#40D0C6' : 'color:white'}}"  class="crt-btn btn2 w-100">Profile</a>
            </div>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
                <a href="{{route('user.appointments')}}" style="{{Request::routeIs('user.appointments') ? 'color:#40D0C6' : 'color:white'}}" class="crt-btn btn2 w-100">Your Appointments</a>

            </div>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
                <a class="crt-btn btn2" style="background-color: #40D0C6;color: white;padding: 8px 10px;border-radius: 3px" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="">Logout</a>
                <form action="{{route('logout')}}" id="logoutForm" method="POST">
                    @csrf
                </form>
            </div>
        </div>
        <div class="itoffcanvas__social">
            <div class="social-icon">
                <a href="{{$links->facebook}}"><i class="fab fa-facebook-f"></i></a>
                <a href="{{$links->linkedIn}}"><i class="fab fa-linkedin"></i></a>
                <a href="{{$links->youtube}}"><i class="fab fa-youtube"></i></a>
                <a href="{{$links->instagram}}"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
