@extends('layouts.app')
@extends('Admin.partial.header')
@extends('Admin.partial.sidenavbar')
@section('content')
@include('sweetalert::alert')

<div class="container">
    <!-- End Row-->
    <div class="row">
        <div class="col-xl-12 text-end">
            <a class="btn btn-primary" style="background-color:green!important;" href="{{ route('teams.index') }}">Back</a>
        </div>
    </div>
    <div class="row mt-3" style="text-align: left;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Team</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('teams.update',$data->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                   <input type="hidden" name="id" value="{{$data->id}}">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" name="name" value="{{$data->name}}" class="form-control" id="exampleInputEmail1" placeholder="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Designation</label>
                                    <input type="text" name="designation" value="{{$data->designation}}" class="form-control" id="exampleInputEmail1" placeholder="Designation">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="file">
                                    Click Me Show:- <a href="{{asset('image/'.$data->image)}}" style="text-decoration:none;color:#bf5a5a;" target="_blank">Image</a>
                                </div>
                                <button  class="btn btn-primary mt-2 mb-0">Update</button>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Heading</label>
                                    <input type="text" name="heading" value="{{$data->heading}}" class="form-control" id="exampleInputEmail1" placeholder="Heading">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="form-label">Description</label>
                                    <textarea name="description"  class="form-control ckeditor" id=""  rows="3">{{$data->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- <button  class="btn btn-primary mt-2 mb-0">Submit</button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
</div>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@include('Admin.partial.footer')
@endsection