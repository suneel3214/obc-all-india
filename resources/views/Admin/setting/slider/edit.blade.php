@extends('layouts.app')
@extends('Admin.partial.header')
@extends('Admin.partial.sidenavbar')
@section('content')
@include('sweetalert::alert')
<style>
    .slide_img{
    width: 60px;
    height: 60;
    border-radius: 50%;
    }
</style>
<div class="comtainer">
    <div class="row">
        <div class="col-xl-12 text-end">
            <a class="btn btn-primary" style="background-color:green!important;" href="{{ route('settings.index') }}">Back</a>
        </div>
    </div>
    <h1 class="mb-3">Slider</h1>
    <div class="row">
        <div class="col-md-6">
           <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Edit Form</h4>
                </div>
                <div class="card-body" style="text-align: left!important;">
                    <form method="post" action="{{route('settings.update',$data->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="text" name="title" value="{{$data->title}}" class="form-control" id="exampleInputEmail1" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="file">
                        </div>
                        <button  class="btn btn-primary mt-2 mb-0">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                  <h5 class="card-title">slider image</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('image/'.$data->image)}}" alt="" height="227">
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
</div>
<br>

@include('Admin.partial.footer')
@endsection