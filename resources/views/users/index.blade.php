@extends('layouts.app')
@extends('Admin.partial.header')
@extends('Admin.partial.sidenavbar')

@section('content')
@include('sweetalert::alert')

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('export') }}" class="btn btn-primary">Export to Excel/CSV</a>
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
            <a class="btn btn-primary" style="background-color:green!important;" href="{{ route('members.create') }}">Registration Member's</a>
        </div>
    </div>
</div>

<table class="table table-striped">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Created By</th>
   <th>Roles</th>
   <th>Status</th>
   <th width="280px">Action</th>
 </tr>
 <?php $i = 1; ?>

    @foreach ($data as $key => $user)
       @if($user_id != $user->roles->id  && $user_id <= $user->roles->id && $userId == $user->userscreate->id)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{$user->userscreate ? $user->userscreate->name : ''}}</td>
            <td>{{$user->roles ? $user->roles->name  : ''}}</td>
            <td>
            @if(in_array("super_admin", Auth::user()->roles->toArray()))
                @if($user->status == 1)
                  <a href="{{route('admin.approve', $user->id)}}" class="btn btn-success btn-sm">Approve</a>
                  @else
                  <a href="{{route('admin.approve', $user->id)}}" class="btn btn-danger btn-sm">UnApprove</a>
                @endif
          @endif
            </td>
            <td>
            <form action="{{route('users.destroy',$user->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn btn-warning btn-sm" href="{{ route('users.show',$user->id) }}">Show</a>
                <a class="btn btn-success btn-sm" href="{{ route('users.edit',$user->id) }}">Edit</a>
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
            </td>
          </tr>
       @endif
    @endforeach
    <tr>
      <td colspan="12" align="left" style="text-decoration:none;">
      {{$data->links()}}
      </td>
    </tr>
</table>
    
    </div>
    
  </div>
</div>
@include('Admin.partial.footer')
@endsection