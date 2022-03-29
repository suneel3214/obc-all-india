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

</style>
@include('Admin.partial.navigation')

    <div class="inner-banner text-center" style="background:url({{asset('image/abc.webp')}});padding-top: 425px;position: relative; background-repeat:no-repeat;background-size:cover;">
        <div class="container">
            <h1 style="color:#fff!important">Teams</h1>
        </div>
    </div>
  <section class="mt-5">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-lg-6">
                 <h1 class="heading">OBC ALL INDIA SAMAJ SEVA KENDRA FOUNDATION TEAMS</h1><br>
                 <p style="line-height: 2;">OBC ALL INDIA Samaj Seva Kendra is a non-profit charity organization (NGO) founded in the
                      year 2022 and established under Reg.02/40/04/25447/22 based and working in Guna.
                      OBC ALL INDIA Samaj Seva Kendra Foundation was established by a team of social workers who are
                     working in the field of health, education, sustainability, empowering women and child development.
                    The purpose for this non-government organization (NGO) is to help the Needy people.
                    We believed that we should help every people who are in need in every field such as education, hospitals, etc.</p>
              </div>
              <div class="col-md-6 col-lg-6">
                  <img src="{{asset('image/ceo.jpg')}}" style="border-radius: 10%; width:100%;height:500px;" alt="">
                  <h4 class="mt-3">Secretary of NGO <span> Mr.Dhanraj Yadav</span></h4>
              </div>
          </div>
          <hr>
          <div class="row mt-5">
              <h1 class="mb-5">All team Member's</h1>
              <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('image/m1.jpg')}}"  style="height: 251px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">designation of ....</h5>
                            <p class="card-text">Name- Neha Jain</p>
                        </div>
                    </div>
              </div>
              <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('image/m2.jpg')}}"  style="height: 251px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">designation of ....</h5>
                            <p class="card-text">Name- Priya Singh Sharma</p>
                        </div>
                    </div>
              </div>
              <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('image/m3.jpg')}}"  style="height: 251px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">designation of ....</h5>
                            <p class="card-text">Name- Anil Sharma</p>
                        </div>
                    </div>
              </div>
              <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('image/m4.jpg')}}"  style="height: 251px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">designation of ....</h5>
                            <p class="card-text">Name- RamMohan Meena</p>
                        </div>
                    </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('image/m5.jpg')}}"  style="height: 251px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">designation of ....</h5>
                            <p class="card-text">Name- Deepti Singh</p>
                        </div>
                    </div>
              </div>
              <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('image/m6.jpg')}}"  style="height: 251px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">designation of ....</h5>
                            <p class="card-text">Name- Sanjna kewat</p>
                        </div>
                    </div>
              </div>
              <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('image/m7.jpg')}}"  style="height: 251px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">designation of ....</h5>
                            <p class="card-text">Name- Suneel Rathore</p>
                        </div>
                    </div>
              </div>
              <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('image/m8.jpg')}}"  style="height: 251px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">designation of ....</h5>
                            <p class="card-text">Name- jai meena</p>
                        </div>
                    </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('image/m9.jpg')}}"  style="height: 251px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">designation of ....</h5>
                            <p class="card-text">Name- Mukesh sharma</p>
                        </div>
                    </div>
              </div>
              <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('image/m10.jpg')}}"  style="height: 251px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">designation of ....</h5>
                            <p class="card-text">Name- Vishal yadav</p>
                        </div>
                    </div>
              </div>
              <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('image/m11.jpg')}}"  style="height: 251px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">designation of ....</h5>
                            <p class="card-text">Name- Deepak Sharma</p>
                        </div>
                    </div>
              </div>
              <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('image/m12.jpg')}}" style="height: 251px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">designation of ....</h5>
                            <p class="card-text">Name- Rakhi Yadav</p>
                        </div>
                    </div>
              </div>
          </div>
      </div>
  </section>
@include('Admin.partial.frontend_footer')
    
    </body>
    </html>