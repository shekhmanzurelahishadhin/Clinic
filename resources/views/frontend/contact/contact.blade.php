<div class="contact__area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                <div class="contact__item d-flex p-relative fix">
                    <div class="contact__item-shape">
                        <img src="{{asset('/')}}frontend/assets/img/contact/contact-shape.png" alt>
                    </div>
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
                    <div class="contact__item-shape">
                        <img src="{{asset('/')}}frontend/assets/img/contact/contact-shape.png" alt>
                    </div>
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
                    <div class="contact__item-shape">
                        <img src="{{asset('/')}}frontend/assets/img/contact/contact-shape.png" alt>
                    </div>
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
