<div class="blog__area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="blog__section-box text-center pb-40">
                    <h4 class="section-subtitle wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">Our Blog News</h4>
                    <div class="blog__title-shape-wrap p-relative wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">

                        @foreach($titles as $data)
                            @if($data->page == 'blogs' )
                                <h2 class="section-title">{{$data->title}}</h2>
                            @endif
                        @endforeach
                        <div class="blog-title-shape">
                            <img src="{{asset('/')}}frontend/assets/img/slider/title-shape.png" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog__slider-wrapper">
            <div class="swiper-container blog__slider-active">
                <div class="swiper-wrapper">
                    @foreach($blogs as $blog)
                    <div class="swiper-slide">
                        <div class="blog__item">
                            <div class="blog__item-img p-relative">
                                <a href="#"><img class="w-100" src="{{asset($blog->main_image)}}" alt></a>

                            </div>
                            <div class="blog__content-box">
                                <div class="blog__category">
                                    @php $timestamp = strtotime($blog->created_at); $month = date('M', $timestamp);$year = date('Y', $timestamp)@endphp
                                    <span><i class="fal fa-calendar-alt"></i>{{ $month }},{{ $blog->created_at->format('d') }}, {{ $year }}</span>
                                </div>
                                <div class="blog__content">
                                    <h4 class="blog__title-sm"><a href="">{{$blog->title}}</a></h4>
                                    <p>{!! $blog->short_details !!}</p>
                                    <div class="blog__link">
                                        <a href="{{route('blogs.details',['id'=>$blog->id])}}"><i class="fas fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="blog-slider-dots"></div>
            </div>
        </div>
    </div>
</div>
