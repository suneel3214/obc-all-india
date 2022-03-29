@extends('layouts.app')
@extends('Admin.partial.header')
@extends('Admin.partial.sidenavbar')
@section('content')
@include('sweetalert::alert')
<style>
    .error{
    color: #FF0000;
    font-size: 13px;
    }
 </style>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <section class="contact-page-content sec-pad">
                        <div class="container">
                            <div class="sec-title text-center">
                                <h2>Edit From</h2>
                            </div>
                            <div class="alert alert-primary" style="display:none"></div>
                            <form method="post" action="{{route('members.update',$member->id)}}" id="retailer_signup" class="meeting-form contact-form myform " enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="col-md-12 col-lg-12 col-sm-12 ">
                                            <input type="hidden" name="id" value="{{$member->id}}">
                                            <input type="hidden" name="user_id" value="{{$user_id}}">
                                            <input type="text" name="fname" placeholder=" Name" value="{{$member->fname}}"/>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                            <input type="text" name="mobile" id="mobile_number" value="{{$member->mobile}}"  placeholder="Mobile Number">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                            <input type="text" name="whatsaap" id="WhatAap_number" value="{{$member->whatsaap}}"  placeholder="WhatAap number">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                            <select name="qualification" id="" class="form-control" value="" style="display: block;border: none;outline: none;background-color: transparent;border-radius: 8px;height: 65px;border: 1px solid #CCD7E0;font-size: 16px;font-weight: 600;color: #798593;width: 100%;padding-left: 30px;">
                                                <option value="">Select Qualification</option>
                                                <option value="Doctorate or higher" {{ $member->qualification == "Doctorate or higher" ? 'selected' : '' }}>Doctorate or higher</option>
                                                <option value="Master's degree" {{ $member->qualification == "Master's degree" ? 'selected' : '' }}>Master's degree</option>
                                                <option value="Bachelor's degree" {{ $member->qualification == "Bachelor's degree" ? 'selected' : '' }}>Bachelor's degree</option>
                                                <option value="Diploma" {{ $member->qualification == "Diploma" ? 'selected' : '' }}>Diploma</option>
                                                <option value="12th" {{ $member->qualification == "12th" ? 'selected' : '' }}>12th</option>
                                                <option value="10th" {{ $member->qualification == "10th" ? 'selected' : '' }}>10th</option>
                                                <option value="other" {{ $member->qualification == "other" ? 'selected' : '' }}>Other's</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">  
                                            <select name="state_id" id="state-dd" style="display: block;border: none;outline: none;background-color: transparent;border-radius: 8px;height: 65px;border: 1px solid #CCD7E0;font-size: 16px;font-weight: 600;color: #798593;width: 100%;padding-left: 30px;">
                                                <option value="">Select State</option>
                                                @foreach ($states as $state)
                                                <option value="{{$state->id}}"@if($state->id == $member->state_id) selected @endif>{{$state->name}}</option>
                                                @endforeach 
                                            </select>               
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                        <input type="text" name="teshil" placeholder="Teshil" class="form-control" id="teshil" value="{{$member->teshil}}">
                                        </div>
                                        <div class="col-md-12  col-lg-12 col-sm-12">      
                                        <input type="text" name="village" class="form-control" placeholder="Village" id="village" value="{{$member->village}}">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">    
                                            <input type="text" name="aadhar_no" class="form-control" placeholder="Aadhar" id="" value="{{$member->aadhar_no}}" maxlength="12">                        
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                            <input type="text" name="pan_no" value="{{$member->pan_no}}" placeholder="PAN No." required maxlength="10">
                                            <!-- <input type="hidden" id="hidden" name="status" value="0">
                                            <input type="checkbox" id="status" name="status" value="1" {{ $member->status == 1 ? 'checked':'NULL' }} style="width:20px;margin-left:22px">
                                            <label for="status" style="margin-left:-60px;margin-top:-45px">Approval & UnApproval Status</label><br> -->
                                        </div>
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                        <input type="text" class="form-control" name="lname" placeholder="Last Name" id="lname" value="{{$member->lname}}">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">  
                                            <select name="category" style="display: block;border: none;outline: none;background-color: transparent;border-radius: 8px;height: 65px;border: 1px solid #CCD7E0;font-size: 16px;font-weight: 600;color: #798593;width: 100%;padding-left: 30px;">
                                            <option value="">Select Category</option>
                                                    <option value="General" {{ $member->category == "General" ? 'selected' : '' }}>General</option>
                                                    <option value="OBC"{{ $member->category == "OBC" ? 'selected' : '' }}>OBC</option>
                                                    <option value="SC" {{ $member->category == "SC" ? 'selected' : '' }}>SC</option>
                                                    <option value="ST" {{ $member->category == "ST" ? 'selected' : '' }}>ST</option>
                                            </select>               
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                        <input type="text" class="form-control" name="email" placeholder="Email"  id="email" value="{{$member->email}}">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                        <input type="text" name="work" class="form-control" placeholder="Work" id="" value="{{$member->work}}">
                                        </div>
                                        <div class="col-md-12  col-lg-12 col-sm-12">
                                            <select name="city_id" id="city-dd" style="display: block;border: none;outline: none;background-color: transparent;border-radius: 8px;height: 65px;border: 1px solid #CCD7E0;font-size: 16px;font-weight: 600;color: #798593;width: 100%;padding-left: 30px;">
                                                <option value="" >Select Distt</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{$city->id}}" {{ $city->id == $member->city_id  ? 'selected' : '' }}>{{$city->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12  col-lg-12 col-sm-12">      
                                        <input type="text" name="panchayat" class="form-control" placeholder="Punchayat" id="panchayat" value="{{$member->panchayat}}">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                         
                                        <input type="text" name="picode" class="form-control" placeholder="Pin Code" id="pincode" value="{{$member->picode}}">
                                        </div> 
                                    <div class="col-md-12 col-lg-12 col-sm-12"> 
                                       <textarea class="form-control" name="comment" placeholder="Comments"  id="comment" cols="30" rows="5">{{$member->comment}}</textarea>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12">                            
                                            <input type="file" name="id_proof" placeholder="Id Proof/ Address Proof" class="form-control" id="image" value="">
                                            Click Me Your Id Proof Show:- <a href="{{asset('image/'.$member->id_proof)}}" style="text-decoration:none;color:#bf5a5a;" target="_blank">Your Id_proof</a>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <div class="col-md-12 ">
                                            <div class="btn-box">
                                            <button class="thm-btn" value="submit" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    jQuery
        ( ".myform" ).validate({
          rules: {
            fname: {
              required: true,
            },
            state: {
              required: true,
            },
            city: {
              required: true,
            },
            teshil: {
              required: true,
            },
            panchayat: {
              required: true,
            },
            village: {
              required: true,
            },
            mobile: {
              required: true,
              minlength:10,
              maxlength:12,
              number: true,
            },
          }
        });
    </script>
   <script>
        $(document).ready(function () {
            
            $('#state-dd').on('change', function () {
                var state_id = this.value;
                $("#city-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-cities')}}",
                    type: "POST",
                    data: {
                        state_id: state_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city-dd').html('<option value="">Select City</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-dd").append('<option value="' + value
                                .name + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@include('Admin.partial.footer')
@endsection