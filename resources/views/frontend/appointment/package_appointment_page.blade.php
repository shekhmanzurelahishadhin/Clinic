@extends('frontend.master')
@section('title')
    Appointment
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
                                <h4 class="it-breadcrumb__title">Appointments</h4>
                                <span><a href="{{route('front.page')}}">Home </a> / <b>Appointments</b></span>
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

        <div class="checkout__area pt-95 pb-20">
            <div class="container">

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="checkout__wrapper pb-10 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <span>Billing Details:</span>
                            <div class="checkout__content">
                                <form action="{{route('make.appointment')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id??null}}">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="checkout__input">
                                                <input type="text" name="name" value="{{Auth::user()->name??null}}" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="checkout__input">
                                                <input type="number" name="number" placeholder="Phone Number" required>
                                            </div>
                                        </div>


                                        <div class="col-xl-6 col-lg-6">
                                                <select class="form-select" name="service_id" aria-label="Default select example">
                                                    <option selected disabled>Select Services</option>
                                                    @foreach($services as $service)
                                                        <option value="{{$service->id}}" {{$selected_services->id==$service->id?'selected':''}} >{{$service->service_title}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="checkout__input">
                                                <input name="date" type="date" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="checkout__input">
                                                <input type="text" name="price" value="{{$selected_services->price}}" placeholder="Price">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" id="transaction_id">
                                            <div class="checkout__input">
                                                <input type="text" name="transaction_id" placeholder="Transaction ID" >
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6" id="payment_type">
                                            <select name="payment_type"  class="form-select" aria-label="Default select example" >
                                                    <option selected disabled>Select Payment Method <span style="color: red!important;">*</span></option>
                                                    <option value="1" >Bkash</option>
                                                    <option value="2" >Nagad</option>
                                                    <option value="3" >Rocket</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="payment_option" id="online" value="0" checked>
                                                <label class="form-check-label" for="online">Online Payment</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="payment_option" id="cash" value="1">
                                                <label class="form-check-label" for="cash">Cash On Delivery</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-form__btn pt-20">
                                        <button class="main-btn blue-bg tp-btn-hover alt-color-white" type="submit"><span>SEND REQUEST</span>
                                            <b></b>
                                            <i class="far fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>




    </main>
    <!-- Content wrapper end -->
    <script>
        const box1 = document.getElementById('payment_type');
        const box2 = document.getElementById('transaction_id');

        function handleRadioClick() {
          if (document.getElementById('cash').checked) {
            box1.style.display = 'none';
            box2.style.display = 'none';
          } else {
            box1.style.display = 'block';
            box2.style.display = 'block';
          }
        }

        const radioButtons = document.querySelectorAll('input[name="payment_option"]');
        radioButtons.forEach(radio => {
          radio.addEventListener('click', handleRadioClick);
        });
    </script>
@endsection
