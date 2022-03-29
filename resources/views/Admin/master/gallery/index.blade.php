@extends('layouts.app')
@extends('Admin.partial.header')
@extends('Admin.partial.sidenavbar')
@section('content')
@include('sweetalert::alert')
<style>
    .profile{
    width: 50px;
    border-radius: 50%;
    }
</style>
<div class="comtainer">
    <div class="row">
        <div class="col-xl-12 text-end">
            <a class="btn btn-primary" style="background-color:green!important;" href="{{ route('galleries.create') }}">Add Gallery Photo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header mt-3">
                    <h3 class="">All Gallery Photo</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered border-bottom w-100">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php $count = 1 ; ?>
                        @foreach($data as $item)
                            <tbody class="text-center">
                                <tr>
                                    <td>{{$count ++}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{!! Str::limit($item->description, 50) !!}</td>
                                    <td><img src="{{asset('image/'.$item->image)}}" class="profile" alt=""></td>
                                    <td>
                                    <form action="{{route('galleries.destroy',$item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-warning showbtn btn-sm" value="{{$item->id}}">More</button>
                                        <a href="{{route('galleries.edit',$item->id)}}" class="btn btn-success btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
</div>
   <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Description</h5>
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
            url: "/gallery-show/"+id,
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