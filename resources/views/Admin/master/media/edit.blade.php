@extends('layouts.app')
@extends('Admin.partial.header')
@extends('Admin.partial.sidenavbar')
@section('content')
@include('sweetalert::alert')

<div class="container">
    <div class="row">
        <div class="col-xl-12 text-end">
            <a class="btn btn-primary" style="background-color:green!important;" href="{{ route('medias.index') }}">Back</a>
        </div>
    </div>
    <!-- End Row-->
    <div class="row" style="text-align: left;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Media Edit Form</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('medias.update',$data->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <input type="hidden" name="id" value="{{$data->id}}">
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control" id="exampleInputEmail1" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Date</label>
                                    <input type="date" name="date" value="{{$data->date}}" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="file">
                                    Click Me Show:- <a href="{{asset('image/'.$data->image)}}" style="text-decoration:none;color:#bf5a5a;" target="_blank">News</a>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Link</label>
                                    <input type="text" name="link" value="{{$data->link}}" class="form-control" id="exampleInputEmail1" placeholder="link">
                                    <span>Ex:- <del>https://www.youtube.com/embed/</del> AVFQztPVlRY</span>
                                </div>
                                <button  class="btn btn-primary mt-2 mb-0">Submit</button>
                            </div>
                            <div class="col-md-6">
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