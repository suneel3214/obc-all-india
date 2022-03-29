<!DOCTYPE html>
<html lang=">
<head>
    <meta charset="UTF-8"/>
    <title>Registration form</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- depdency stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i%7CCovered+By+Your+Grace" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" id="theme" href="include_front/assist/css/sweetalert.css"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
@include('sweetalert::alert')

<div class="page-wrapper">
<style>
.error{
color: #FF0000;
font-size: 13px;
margin-right:180px;
    }
.easy-steps-style-one {
  background: #0F6FD5 url(include_front/assist/images/easy-step-bg.png) center center no-repeat;
  background-size: cover;
}
.single-solution-style-one::before {
    background: #0F6FD5;
    border-radius: 6px;
}
.top-bar {
    background: #0F6FD5;
    padding: 14.75px 50px;
}


.text-gray-700{
  background-color:#fff;
  color:#000;
  padding:6px;
  font-weight: 800;
  letter-spacing: .5px;
  border-radius:5px;
}
.text-gray-700{
    color:#ee3234;
    transition: all .4s ease;
}
</style>
@include('Admin.partial.navigation')

<!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" style="text-align: end;background-color:#132546;">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" >
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log In</a>
                @endauth
            </div>
        @endif
</div> -->
    <div class="inner-banner text-center" style="background:url({{asset('image/abc.webp')}});padding-top: 425px;position: relative; background-repeat:no-repeat;background-size:cover;">
        <div class="container">
            <h1 style="color:#fff!important">Registration Request </h1>
        </div>
    </div>
    <section class="contact-page-content sec-pad">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Registration From</h2>
            </div>
			<div class="alert alert-primary" style="display:none"></div>
            <form method="post" action="{{route('members.store')}}" id="retailer_signup" class="meeting-form contact-form myform " enctype="multipart/form-data">
               @csrf
               <div class="row">
                    <div class="col-sm-6">
                        <div class="col-md-12 col-lg-12 col-sm-12 ">
                            <input type="text" name="fname" placeholder=" Name"/>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                            <input type="number" name="mobile" id="mobile_number"  placeholder="Mobile Number">
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                            <input type="number" name="whatsaap" id="WhatAap_number"  placeholder="WhatAap number">
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
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12">                            
                            <input type="text" name="pan_no" placeholder="PAN No." required maxlength="10">
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
    @include('Admin.partial.frontend_footer')

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
<script src="include_front/assist/js/jquery.js"></script>

<script src="include_front/assist/js/bootstrap.bundle.min.js"></script>

<script src="include_front/assist/js/jquery.magnific-popup.min.js"></script>

<script src="include_front/assist/js/owl.carousel.min.js"></script>

<script src="include_front/assist/js/isotope.js"></script>

<script src="include_front/assist/js/bootstrap-select.min.js"></script>

<script src="include_front/assist/js/jquery.bxslider.min.js"></script>

<script src="include_front/assist/js/jquery.validate.min.js"></script>

<script src="include_front/assist/js/theme.js"></script>
@include('sweetalert::alert')
</body>
</html>

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

