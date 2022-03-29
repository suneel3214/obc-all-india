@extends('layouts.app')
@extends('Admin.partial.header')
@extends('Admin.partial.sidenavbar')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show User</h2>
        </div>
        <div class="pull-right">
            <!-- <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a> -->
        </div>
    </div>
</div>


<div class="row" style="text-align: initial;">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Roles:</strong>
            {{$user->roles ? $user->roles->name  : ''}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Created_By:</strong>
            {{$user->userscreate ? $user->userscreate->name : ''}}
        </div>
    </div>
</div>
@include('Admin.partial.footer')
@endsection