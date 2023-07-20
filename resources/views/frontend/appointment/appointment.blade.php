<div class="contact-form__area contact-form__bg contact-form__space" data-background="{{asset('/')}}frontend/assets/img/contact/contact-bg.jpg">
    <div class="contact-form__shape">
        <span><i class="fal fa-briefcase-medical"></i></span>
    </div>
    <div class="contact-form__circle d-none d-xxxl-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-6 col-md-6">
                <div class="contact-form__item z-index">
                    <div class="contact-form__section-title pb-20">
                        <h4 class="section-subtitle text-white wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">Appointment</h4>
                        <div class="contact-form-title-shape-wrap p-relative wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <h2 class="section-title text-white">{{$info->title??null}}</h2>
                            <div class="contact-form-title-shape">
                                <img src="{{asset('/')}}frontend/assets/img/slider/title-shape.png" alt>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form__content-box" style="color: white!important;">
                        {!! $info->details1??null !!}
                        {!! $info->details2??null !!}
                        {!! $info->details3??null !!}

                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="contact-form__wrapper-box contact-form__wrapper-bg text-center z-index" data-background="{{asset('/')}}frontend/assets/img/contact/contact-bg-1.png">
                    <div class="contact-form__form-text pb-40">
                        <h4 class="contact-form__title-sm">Appointment</h4>

                    </div>
                    <form action="{{route('appointment')}}" method="POST" class="book-appointment-form mt-5">
                        @csrf
                        <div class="content-title">
                            <h6 class="text-light">Book an Appointment</h6>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="number" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="service_id" id="select_time">
                                        <option value="0" data-display="Select Services" disabled selected>Select Services</option>
                                        @foreach($services as $service)
                                            <option value="{{$service->id}}" >{{$service->service_title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="date" type="date" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="select_time" id="select_time">
                                        <option value="0" data-display="Select Time">Select Time</option>
                                        <option value="1" >10:00 AM</option>
                                        <option value="2" >11:00 AM</option>
                                        <option value="3" >12:00 PM</option>
                                    </select>
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


<div class="brand__area">
    <div class="brand__space">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="brand__slider-wrapper-box">
                        <div class="swiper-container brand__slider-active">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
