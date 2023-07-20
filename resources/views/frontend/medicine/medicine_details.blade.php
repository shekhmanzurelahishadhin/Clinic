@extends('frontend.master')
@section('title')
    Medicine Store
@endsection
@section('content')
    <!-- Content Wrapper Start -->
    <main>

        <div class="tp-product-details-area">
            <div class="container">
                <div class="shop-details-area pt-100 pb-120">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-12  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                <div class="product-img-tabs">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-links" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false"><img src="{{asset($product->image1)}}" alt></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-links" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><img src="{{asset($product->image2)}}" alt></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-links active" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="true"><img src="{{asset($product->image3)}}" alt></button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><img src="{{asset($product->image1)}}" alt></div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><img src="{{asset($product->image2)}}" alt></div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><img src="{{asset($product->image3)}}" alt></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                <div class="product-details-content">
                                    <h3 class="product-details-title mb-10">{{$product->name??null}}</h3>

                                    <div class="product-paragraph">
                                        {!! $product->details1??null !!}
                                    </div>
                                    <div class="product-price mb-30">
                                        <span class="new-price">Price:${{$product->price??null}}</span>
                                    </div>
                                    <div class="tp-shop-quantity p-relative pb-50">
                                        <div class="qty_button cart-minus"><i class="fal fa-minus"></i></div><input type="text" value="1"><div class="qty_button cart-plus"><i class="fal fa-plus"></i></div>
                                    </div>
                                    <button class="sky-btn height"><span>Add To Card</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-additional-info pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="product-additional-tab">
                            <div class="tab-content tp-content-tab" id="myTabContent-2">
                                <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
                                  {!! $product->details2??null !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <!-- Content wrapper end -->

@endsection
