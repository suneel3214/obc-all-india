<!DOCTYPE html>
<html lang=">
<head>
    <meta charset="UTF-8"/>
    <title>Registration form </title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- depdency stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i%7CCovered+By+Your+Grace" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" id="theme" href="include_front/assist/css/sweetalert.css"/>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script><link rel="stylesheet" href="{{asset('css/style.css')}}">
      
</head>
<body>
<div class="page-wrapper">
<style>
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
.thm-btn {
  border: none;
  outline: none;
  cursor: pointer;
  display: inline-block;
  vertical-align: middle;
  color: #FFFFFF;
  background: #ee3234;
  font-size: 12px;
  font-weight: 800;
  letter-spacing: .04em;
  text-transform: uppercase;
  border-radius: 30px;
  padding: 18px 39.5px;
  text-align: center;
  -webkit-box-shadow: 0px 10px 30px 0px rgb(238 50 52 / 30%);
  box-shadow: 0px 10px 30px 0px rgb(238 50 52 / 30%);
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}

.forgot{
    text-decoration: none;
    color: #000;
}
</style>
@include('Admin.partial.navigation')

    <div class="inner-banner text-center" style="background:url({{asset('image/abc.webp')}});padding-top: 425px;position: relative; background-repeat:no-repeat;background-size:cover;">
        <div class="container">
            <h1 style="color:#fff!important">log -in here</h1>
        </div>
    </div>
    <section class="contact-page-content sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 card shadow">
                    @if(session()->has('message'))
                        <div class="alert alert-danger" style="font-size:35px;">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="sec-title text-center">
                        <h2>log-in </h2>
                    </div>
                    <div class="alert alert-primary" style="display:none"></div>
                    <form method="POST" action="{{ route('login') }}" id="retailer_signup" class="meeting-form contact-form " enctype="multipart/form-data">
                       @csrf
                        <div class="col-md-12 col-lg-12 mb-5 col-sm-12 ">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-12 col-lg-12 mb-5 col-sm-12">                            
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div> 
                        <div class="col-md-12">
                            <div class="btn-box mb-5">
                                <!-- <button type="submit" id="submit" name="add" class="btn btn-primary">Request To Registration</button> -->
                                
                                <button type="submit" id="submit" class="thm-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Log In</button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link forgot" style="text-decoration:none;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif   
                            </div><!-- /.btn-box -->
                        </div><!-- /.col-md-12 -->
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
@include('Admin.partial.frontend_footer')
    
    </body>
        <script src="include_front/assist/js/bootstrap-select.min.js"></script>
        <script src="include_front/assist/js/jquery.bxslider.min.js"></script>
        <script src="include_front/assist/js/jquery.validate.min.js"></script>
        <script src="include_front/assist/js/theme.js"></script>
    </html>