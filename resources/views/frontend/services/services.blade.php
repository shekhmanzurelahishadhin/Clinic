


    <div class="service-5__area pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="service-5__title-box text-center pb-20">
                        <h4 class="section-subtitle theme wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">Our
                            Best Service </h4>
                        @foreach($titles as $data)
                            @if($data->page == 'services' )

                                <h3 class="section-title-2 pb-15 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                    {{$data->title}}</h3>
                            @endif
                        @endforeach


                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="service-5__item service-5__item-color mb-30">
                        <div class="service-5__thumb p-relative">
                            <img class="w-100" height="250px" src="{{asset($service->main_image)}}" alt>

                        </div>
                        <div class="service-5__content">
                            <h4 class="service-5__title-sm"><a href="">{{$service->service_title}}</a></h4>
                            <div class="mb-3">
                                {!! $service->service_details_small !!}
                            </div>
                            <div class="d-flex justify-content-between">
                                <span><a href="{{route('services.details',['id'=>$service->id])}}">See Details</a></span>
                                <span><a href="{{route('package.appointment',['id'=>$service->id])}}">Appointment Now</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


