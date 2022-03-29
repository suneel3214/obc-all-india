@extends('layouts.app')
@extends('Admin.partial.header')
@extends('Admin.partial.sidenavbar')

@section('content')



<div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{$title}}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
            <a class="btn btn-primary" style="background-color:green!important;" href="{{ route('members.create') }}">Registration Member's</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-striped">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Created By</th>
   <th>Roles</th>
   <th width="280px">Action</th>
   <?php $i = 1; ?>
 </tr>
    @foreach ($data as $key => $user)
        @if($user_id != $user->roles->id  && $user_id <= $user->roles->id && $userId == $user->userscreate->id)
          <tr>
            <td>{{ $i ++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{$user->userscreate ? $user->userscreate->name : ''}}</td>
            <td>{{$user->roles ? $user->roles->name  : ''}}</td>
            <td>
              <a class="btn btn-warning btn-sm" href="{{ route('users.show',$user->id) }}">Show</a>
              <a class="btn btn-success btn-sm" href="{{ route('users.edit',$user->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            </td>
          </tr>
       @endif
    @endforeach
</table>
    </div>
  </div>
</div>
@include('Admin.partial.footer')
@endsection