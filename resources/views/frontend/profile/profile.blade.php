@extends('frontend.master')
@section('title')
    Profile Settings
@endsection
@section('content')
    <!-- Main content Start -->
    <div class="main-content">
        <div class="it-breadcrumb__area fix">
            <div class="it-breadcrumb__bg" data-background="{{asset($banner->image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-7 col-xl-5 col-lg-5">
                            <div class="it-breadcrumb__left-content wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                <h4 class="it-breadcrumb__title">Profile Settings</h4>
                                <span><a href="{{route('front.page')}}">Home </a> / <b>Profile Settings</b></span>
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

        <!-- Shop Single Start -->
        <div class="container my-5">
            <div class="row mt-2">
                <div class="col-lg-12 ">
                    <div class="card mt-3">
                        @if(session('message'))
                            <div class="alert alert-success" role="alert">
                                {{session('message')}}
                            </div>
                        @endif
                        <div class="card-body">
                            <h3 class="text-center text-dark">Update Information</h3>
                            <form class="form-horizontal" action="{{route('user.update.profile')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" rows="5" name="name" value="{{$user->name}}" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" rows="5" name="email" value="{{$user->email}}" id="email" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="text" class="form-control" rows="5" name="new_password" id="youtube" placeholder="new password">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image"  class="form-control">
                                    <img src="{{$user->image??null}}" class="my-4" height="100" width="100" alt="">
                                </div>
                                <div class="table-responsive">
                                    <button type="submit" class="btn btn-info">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- Main content End -->
@endsection
