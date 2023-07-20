@extends('frontend.master')
@section('title')
    Appointments List
@endsection
@section('content')


    <main>

        <div class="it-breadcrumb__area fix">
            <div class="it-breadcrumb__bg" data-background="{{asset($banner->image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-7 col-xl-5 col-lg-6">
                            <div class="it-breadcrumb__left-content wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                <h4 class="it-breadcrumb__title">Appointments List</h4>
                                <span><a href="{{route('front.page')}}">Home</a> / <b>Appointments List</b></span>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-7 col-lg-6">
                            <div class="it-breadcrumb__content text-center text-lg-start">
                                <img src="assets/img/breadcrumb/brd-1.png" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="team__area pt-50 pb-5">
            <h4 class="text-dark text-center">Appointments List</h4>
            <div class="container my-5">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="table-responsive m-t-40">
                                <table id="config-table" class="table display table-striped border no-wrap">
                                    <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>User Name</th>
                                        <th>Payment Method</th>
                                        <th>Payment Option</th>
                                        <th>Number</th>
                                        <th>Transaction ID</th>
                                        <th>Date</th>
                                        <th>Price</th>
                                        <th>Status</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($appointments as $appointment)
                                        <tr>
                                            <td>{{ $appointment->service->service_title ?? null }}</td>
                                            <td>{{ $appointment->user->name ?? null }}</td>
                                            @if($appointment->payment_type==1)
                                                <td>Bkash</td>
                                            @elseif($appointment->payment_type==2)
                                                <td>Nagad</td>
                                            @elseif($appointment->payment_type==3)
                                                <td>Rocket</td>
                                            @else
                                                <td></td>
                                            @endif
                                            @if($appointment->payment_option==0)
                                                <td>Online Payment</td>
                                            @elseif($appointment->payment_option==1)
                                                <td>Cash On Delivery</td>
                                            @endif
                                            <td>{{ $appointment->number ?? null }}</td>
                                            <td>{{ $appointment->transaction_id ?? null }}</td>
                                            <td>{{ $appointment->date ?? null }}</td>
                                            <td>{{ $appointment->price ?? null }}</td>
                                            <td>
                                                @if ($appointment->status == 1)
                                                    <button class="btn btn-sm btn-success">Approved</button>
                                                @elseif($appointment->status == 0)
                                                    <button class="btn btn-sm btn-warning">Pending</button>
                                                @endif
                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </main>
@endsection
