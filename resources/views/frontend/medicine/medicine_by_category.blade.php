@extends('frontend.master')
@section('title')
    Medicine Store
@endsection
@section('content')
    <!-- Content Wrapper Start -->
    <main>

        <div class="it-breadcrumb__area fix">
            <div class="it-breadcrumb__bg" data-background="{{asset($banner->image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-7 col-xl-5 col-lg-6">
                            <div class="it-breadcrumb__left-content wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                <h4 class="it-breadcrumb__title">Medicine Store</h4>
                                <span><a href="{{route('front.page')}}" class="text-light text-decoration-none">Home</a> / <b>Medicine Store</b></span>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-7 col-lg-6">
                            <div class="it-breadcrumb__content text-center text-lg-start">
                                {{--                                <img src="{{asset('/')}}frontend/assets/img/breadcrumb/brd-1.png" alt>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="it-categoeya__area pt-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="sidebar__serch pb-10 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                    <div class="sidebar__search">
                                        <form action="{{route('medicine.by.search')}}" method="GET">
                                            @csrf
                                            <input type="hidden" name="category_id" value="{{$category_id}}">
                                            <div class="sidebar__search">
                                                <input type="text" name="search" placeholder="Search.....">
                                                <button type="submit">
                                                    <i class="fal fa-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="sidebar__widget slidebar__border-none mb-40 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                    <div class="sidebar__widge-title-box">
                                        <h3 class="sidebar__widget-title">Categories</h3>
                                    </div>
                                    <div class="sidebar__widget-content">
                                        <ul>
                                            @foreach($categories as $category)
                                                @php $product_total = \App\Models\Product::where('category_id',$category->id)->get() @endphp
                                                <li><a href="{{route('medicine.by.category',['id'=>$category->id])}}"><span><i class="far fa-long-arrow-alt-right"></i>{{$category->name??null}}</span><span>({{$product_total->count()}})</span></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                                <h4 class="">Filter Price</h4>
                                <form action="{{route('medicine.by.price')}}" method="GET">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{$category_id}}">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <input style="width:140px" class="form-control" name="start" value="{{$start??null}}" type="text">
                                        <input style="width:140px" class="form-control" name="end" value="{{$end??null}}" type="text">

                                    </div>
                                    <button style="margin-top: 10px;background-color: #40D0C6;color: white;padding: 8px 10px;border-radius: 3px" type="submit">Find</button>
                                </form>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="sidebar__widget slidebar__border-none mb-40 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                    <div class="sidebar__widge-title-box">
                                        <h3 class="sidebar__widget-title">Brands</h3>
                                    </div>
                                    <div class="sidebar__widget-content">
                                        <ul>
                                            @foreach($brands as $brand)
                                                @php $product_total = \App\Models\Product::where('brand_id',$brand->id)->get() @endphp
                                                <li><a href="{{route('medicine.by.brand',['id'=>$brand->id])}}"><span><i class="far fa-long-arrow-alt-right"></i>{{$brand->name??null}}</span><span>({{$product_total->count()}})</span></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 mb-3">
                        <div class="row">
                            @php $time = 0.3 @endphp
                            @foreach($products as $product)
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="{{$time=$time+0.2}}s">
                                    <div class="product__item text-center">
                                        <div class="product__img">
                                            <img src="{{asset($product->image1??null)}}" alt>
                                            <div class="product__icon-wrapper">
                                                <a href="#">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <div class="product__icon">
                                                    <a href="{{route('medicine.details',['id'=>$product->id])}}"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__content-text">
                                                <span>{{$product->category->name??null}},{{$product->brand->name??null}}</span>
                                                <a href="{{route('medicine.details',['id'=>$product->id])}}">
                                                    <h4>{{$product->name}}</h4>
                                                </a>
                                                <span class="dolar">Price:&nbsp;${{$product->price}}</span>
                                            </div>
                                            <div class="product__button">
                                                <a class="blue-btn-sm" href="cart.html">Add To Card</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>


    </main>

    <!-- Content wrapper end -->

@endsection
