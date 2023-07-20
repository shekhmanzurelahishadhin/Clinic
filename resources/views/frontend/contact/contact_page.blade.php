@extends('frontend.master')
@section('title')
    Packages
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
                                <h4 class="it-breadcrumb__title">Contacts</h4>
                                <span><a href="{{route('front.page')}}">Home </a> / <b>Contacts</b></span>
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

        <!-- Contact Us section Start -->
        <section class="contact-us-wrap ptb-100">
            <div class="container">
                <div class="contact__area mb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                <div class="contact__item d-flex p-relative fix">

                                    <div class="contact__icon">
                                        <span><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <div class="contact__content">
                                        <h4 class="contact__title-sm">Email Us</h4>
                                        <a class="contact__content-text" href="mailto:{{$links->email}}"><span class="" data-cfemail="">{{$links->email??null}}</span></a>
                                        <a href="{{route('appointment.page')}}"><i class="far fa-arrow-right"></i>Appointment Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                <div class="contact__item d-flex p-relative fix">

                                    <div class="contact__icon">
                                        <span><i class="fab fa-whatsapp"></i></span>
                                    </div>
                                    <div class="contact__content">
                                        <h4 class="contact__title-sm">Appointment Call</h4>
                                        <a class="contact__content-text" href="tel:{{$links->number}}">{{$links->number}}</a>
                                        <a href="{{route('appointment.page')}}"><i class="far fa-arrow-right"></i>Appointment Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                <div class="contact__item d-flex p-relative fix">
                                    <div class="contact__icon">
                                        <span><i class="fal fa-map-marker-alt"></i></span>
                                    </div>
                                    <div class="contact__content">
                                        <h4 class="contact__title-sm">Address</h4>
                                        <a class="contact__content-text" href="https://ordainit.com/cdn-cgi/l/email-protection#5834392a372c21183a392a39763b3735">{{$links->address}}</a>
                                        <a href="{{route('appointment.page')}}"><i class="far fa-arrow-right"></i>Appointment Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="contact-form">
                            <h3 class="text-dark">Send Us A Message</h3>
                            <form class="form-wrap pb-150" method="POST" action="{{route('contact')}}" >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control mt-3 p-3" placeholder="Name*" id="name"
                                                   required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control mt-3 p-3" id="email" required
                                                   placeholder="Email*" data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="number" class="form-control mt-3 p-3" id="phone" required
                                                   placeholder="Phone Number*" data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control mt-3 p-3" placeholder="Subject*" id="msg_subject" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group v1">
                                            <textarea name="message" id="message" class="form-control mt-3 p-3" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="contact-form__btn pt-20">
                                        <button class="main-btn blue-bg tp-btn-hover alt-color-white" type="submit"><span>SEND MESSAGE</span>
                                            <b></b>
                                            <i class="far fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="comp-map">
                            {!! $links->map_link !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us section End -->

    </main>
    <!-- Content wrapper end -->
@endsection
