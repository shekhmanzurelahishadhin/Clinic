@extends('admin.master')
@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="table-responsive m-t-40">
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                        <tr>
                            <th>Service Name</th>
                            <th>User Name</th>
                            <th>Payment Method</th>
                            <th>Payment Option</th>
                            <th>Number</th>
                            <th>Transaction ID</th>
                            <th>Status</th>
                            <th>Action</th>
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
                                <td>
                                    @if ($appointment->status == 1)
                                        <button class="btn btn-sm btn-success">Approved</button>
                                    @elseif($appointment->status == 0)
                                        <button class="btn btn-sm btn-warning">Pending</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('update.appointments',['id'=>$appointment->id]) }}" class="btn btn-primary btn-sm editProduct">Approve</a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>
@endsection
