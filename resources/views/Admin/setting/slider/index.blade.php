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
    <h1 class="mb-3">Slider</h1>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered border-bottom w-100">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php $count = 1; ?>
                        @foreach($data as $item)
                        <tbody class="text-center">
                            <tr>
                                <td>{{$count ++}}</td>
                                <td>{{$item->title}}</td>
                                <td>
                                    <img src="{{asset('image/'.$item->image)}}" class="slide_img" alt="">
                                </td>
                                <td>
                                <form action="{{route('settings.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('settings.edit',$item->id)}}" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
           <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form</h4>
                </div>
                <div class="card-body" style="text-align: left!important;">
                    <form method="post" action="{{route('settings.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="file">
                        </div>
                        <button  class="btn btn-primary mt-2 mb-0">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
</div>
<br>

@include('Admin.partial.footer')
@endsection