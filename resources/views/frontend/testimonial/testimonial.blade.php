<div class="testimonial__area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial__section-title text-center pb-65">
                    <h4 class="section-subtitle wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">Testimonials</h4>
                    <div class="testimonial__title-shape-wrap p-relative wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">

                        @foreach($titles as $data)
                            @if($data->page == 'testimonial' )
                                <h2 class="section-title">{{$data->title}}</h2>
                            @endif
                        @endforeach
                        <div class="testimonial-title-shape">
                            <img src="{{asset('/')}}frontend/assets/img/slider/title-shape.png" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial__slider-wrapper">
            <div class="swiper-container testimonial__slider-active">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial__wrapper p-relative">
                            <div class="testimonial__icon">
                                <span><i class="fas fa-quote-right"></i></span>
                            </div>
                            <div class="testimonial__img">
                                <img src="{{asset($testimonial->image)}}" style="border-radius: 50%" height="90px" width="90px" alt>
                            </div>
                            <div class="testimonial__item fix p-relative text-center">
                                <div class="testimonial__text">
                                    <div class="testimonial__circle"></div>
                                    <h4 class="testimonial__title-sm">{{$testimonial->name??null}}</h4>
                                    <span>{{$testimonial->designation??null}}</span>
                                    <div class="testimonial__star">
                                        @for($i=0;$i<$testimonial->star;$i++)
                                        <i class="fas fa-star"></i>
                                        @endfor
                                        @for($i=0;$i<(5-$testimonial->star);$i++)
                                        <i class="fas fa-star star-color"></i>
                                        @endfor
                                    </div>
                                    <p>{!! $testimonial->review !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="testimonial-slider-dots"></div>
            </div>
        </div>
    </div>
</div>
