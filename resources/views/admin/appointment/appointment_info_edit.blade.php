@extends('admin.master')
@section('title')
    Appointment settings
@endsection
@section('body')
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">

                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('update.appointment.info')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" value="{{$appointment_info->id}}" name="id">

                        <div class="form-group">
                            <label>Appointment Title</label>
                            <input type="text" class="form-control" rows="5" name="title" id="title" value="{{$appointment_info->title}}" placeholder="About Title" required>
                        </div>

                        <div class="form-group">
                            <label>Details One</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details1" >{!! $appointment_info->details1 !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Details Two</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details2" >{!! $appointment_info->details2 !!}</textarea>
                        </div><div class="form-group">
                            <label>Details Three</label>
                            <textarea id="tinymce" class="editor form-control" col="10" row="3" name="details3" >{!! $appointment_info->details3 !!}</textarea>
                        </div>

                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
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
