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
                            @if(session()->has('message'))
                                <div class="alert alert-danger" style="font-size:35px;">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                                <h2>Registration From</h2>
                            </div>
                            <div class="alert alert-primary" style="display:none"></div>
                            <form method="post" action="{{route('members.store')}}" id="retailer_signup" class="meeting-form contact-form myform " enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="col-md-12 col-lg-12 col-sm-12 ">
                                            <input type="hidden" name="user_id" value="{{$user_id}}">
                                            <input type="text" name="fname" placeholder=" Name"/>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                            <input type="text" name="mobile" id="mobile_number"   placeholder="Mobile Number">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                            <input type="text" name="whatsaap" maxlength="12" id="WhatAap_number"  placeholder="WhatAap number">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                            <select name="qualification" id="" class="form-control" style="display: block;border: none;outline: none;background-color: transparent;border-radius: 8px;height: 65px;border: 1px solid #CCD7E0;font-size: 16px;font-weight: 600;color: #798593;width: 100%;padding-left: 30px;">
                                                <option value="">Select Qualification</option>
                                                <option value="Doctorate or higher">Doctorate or higher</option>
                                                <option value="Master's degree">Master's degree</option>
                                                <option value="Bachelor's degree">Bachelor's degree</option>
                                                <option value="Diploma">Diploma</option>
                                                <option value="12th">12th</option>
                                                <option value="10th">10th</option>
                                                <option value="other">Other's</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">  
                                            <select name="state_id" id="state-dd" style="display: block;border: none;outline: none;background-color: transparent;border-radius: 8px;height: 65px;border: 1px solid #CCD7E0;font-size: 16px;font-weight: 600;color: #798593;width: 100%;padding-left: 30px;">
                                                <option value="">Select State</option>
                                                @foreach ($states as $state)
                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                                @endforeach 
                                            </select>               
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                        <input type="text" name="teshil" placeholder="Teshil" class="form-control" id="teshil" value="">
                                        </div>
                                        <div class="col-md-12  col-lg-12 col-sm-12">      
                                        <input type="text" name="village" class="form-control" placeholder="Village" id="village" value="">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">    
                                            <input type="text" name="aadhar_no" class="form-control" placeholder="Aadhar" id="" value="" maxlength="12">                        
                                            <small class="text-danger">@error('aadhar_no'){{$message}}@enderror</small>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12"> 
                                            <input type="text" name="pan_no" placeholder="PAN No."  maxlength="10">
                                            <small class="text-danger">@error('pan_no'){{$message}}@enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                        <input type="text" class="form-control" name="lname" placeholder="Last Name" id="lname" value="">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">  
                                            <select name="category" style="display: block;border: none;outline: none;background-color: transparent;border-radius: 8px;height: 65px;border: 1px solid #CCD7E0;font-size: 16px;font-weight: 600;color: #798593;width: 100%;padding-left: 30px;">
                                            <option value="">Select Category</option>
                                                    <option value="General">General</option>
                                                    <option value="OBC">OBC</option>
                                                    <option value="SC">SC</option>
                                                    <option value="ST">ST</option>
                                            </select>               
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                        <input type="text" class="form-control" name="email" placeholder="Email"  id="email" value="">
                                        <small class="text-danger">@error('email'){{$message}}@enderror</small>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                        <input type="text" name="work" class="form-control" placeholder="Work" id="" value="">
                                        </div>
                                        <div class="col-md-12  col-lg-12 col-sm-12">                            
                                            <select name="city_id" id="city-dd" style="display: block;border: none;outline: none;background-color: transparent;border-radius: 8px;height: 65px;border: 1px solid #CCD7E0;font-size: 16px;font-weight: 600;color: #798593;width: 100%;padding-left: 30px;">
                                                <option value="">Select Distt</option>	
                                            </select>
                                        </div>
                                        <div class="col-md-12  col-lg-12 col-sm-12">      
                                        <input type="text" name="panchayat" class="form-control" placeholder="Punchayat" id="panchayat" value="">
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12">                         
                                        <input type="text" name="picode" class="form-control" placeholder="Pin Code" id="pincode" value="">
                                        </div> 
                                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                                            <label for="Id Proof/ Address Proof" id="adress">Id Proof/ Address Proof </label>                         
                                            <input type="file" name="id_proof" placeholder="Id Proof/ Address Proof" class="form-control" id="image" value="">
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12"> 
                                    <textarea class="form-control" name="comment" placeholder="Comments"  id="comment" cols="30" rows="5"></textarea>
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
                            </for
                            m>
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
            whatsaap: {
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
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>

    
@include('Admin.partial.footer')
@endsection