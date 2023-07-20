@extends('admin.master')
@section('title')
    Category Edit
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
                    <form class="form-horizontal" action="{{route('update.brand')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" value="{{$brand->id??null}}" name="id">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control" rows="5" name="name" value="{{$brand->name??null}}" id="name" placeholder="Brand Name">
                        </div>

                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="status">
                                <option value="1" @if ($brand->status == 1) selected @endif>Active</option>
                                <option value="0" @if ($brand->status == 0) selected @endif>Deactive</option>
                            </select>
                        </div>

                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Submit</button>
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
