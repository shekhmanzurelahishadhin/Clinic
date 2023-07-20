<div class="project__area pb-40 grey-bg fix pt-100" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="project__section-title text-center pb-40">
                    <h4 class="section-subtitle wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">Our Gallery</h4>
                    <div class="project__title-shape-wrap p-relative wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">

                        @foreach($titles as $data)
                            @if($data->page == 'gallery' )
                                <h2 class="section-title">{{$data->title??null}}</h2>
                            @endif
                        @endforeach
                        <div class="project-title-shape">
                            <img src="{{asset('/')}}frontend/assets/img/slider/title-shape.png" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project__slider-wrapper">
            <div class="swiper-container project__slider-active">
                <div class="swiper-wrapper">
                    @foreach($galleries as $gallery)
                    <div class="swiper-slide">
                        <div class="project__item p-relative fix">
                            <img src="{{asset($gallery->image)}}" alt>
                            <div class="project__item-overly">
                                <div class="project__icon">
                                    <a class="popup-image" href="{{asset($gallery->image)}}"><i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="project-slider-dots"></div>
            </div>
        </div>
    </div>
</div>
