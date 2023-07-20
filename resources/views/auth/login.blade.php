@extends('frontend.master')

@section('content')

<div class="content-wrapper">

{{--    <!-- Breadcrumb Start -->--}}
{{--    <div class="breadcrumb-wrap bg-f br-1">--}}
{{--        <div class="container">--}}
{{--            <div class="breadcrumb-title">--}}
{{--                <h2>Register</h2>--}}
{{--                <ul class="breadcrumb-menu list-style">--}}
{{--                    <li><a href="index.html">Home </a></li>--}}
{{--                    <li>Login</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Breadcrumb End -->--}}

    <!-- Account Section start -->
    <section class="Login-wrap pt-100 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2" style="border: 1px solid #172B4C;text-align: center;padding: 80px 20px">
                    <div class="login-form-wrap">
                        <div class="login-header">
                            <h3 class="text-dark">Login</h3>
                            @if(session('error'))
                            <p class="text-danger">{{session('error')}}</p>
                            @endif
                        </div>
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input id="email" class="form-control my-3 py-3" name="email" type="email" placeholder="Username Or Email Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input id="password" class="form-control my-3 py-3" name="password" placeholder="Password" type="password" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button class="btn text-light w-100 d-block py-3 " style="background-color: #172B4C">
                                            Login Now
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p class="my-3">Don't have an Account? <a class="link style1" href="{{route('register')}}">Create One</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Account Section end -->

</div>
<!-- Content wrapper end -->
@endsection
