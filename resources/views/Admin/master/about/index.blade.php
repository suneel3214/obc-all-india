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
    <h1 class="mb-3">About</h1>
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
                                <td>{{$item->heading}}</td>
                                <td>
                                    <img src="{{asset('image/'.$item->image)}}" class="slide_img" alt="">
                                </td>
                                <td>
                                <form action="{{route('abouts.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-warning showbtn btn-sm" value="{{$item->id}}"><i class="fa-solid fa-eye"></i></button>
                                    <a href="{{route('abouts.edit',$item->id)}}" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
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
                    <form method="post" action="{{route('abouts.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Headnig</label>
                            <input type="text" name="heading" class="form-control" id="exampleInputEmail1" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="file">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            <textarea name="description"  class="form-control ckeditor" id=""  rows="3"></textarea>
                        </div>
                        <button  class="btn btn-primary mt-2 mb-0">Submit</button>
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
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">About</h5>
                <button type="button" class="close btn btn-primary" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i></button>
            </div>
            <div class="modal-body" id="showProfile">
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(document).ready(function() {

    $(document).on('click' , '.showbtn' , function() {
        var id = $(this).val();  
        // alert(id);    
        $.ajax({

            type: "GET",
            url: "/about-show/"+id,
            success: function(response){
                $('#showProfile').html(response)
                $('#profileModal').modal('show');
           }
        });
    });
});
</script>
<br>

@include('Admin.partial.footer')
@endsection