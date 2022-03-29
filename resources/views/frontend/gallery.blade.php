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
.img-h{
    height: 240px !important;
}
</style>
@include('Admin.partial.navigation')

    <div class="inner-banner text-center" style="background:url({{asset('image/abc.webp')}});padding-top: 425px;position: relative; background-repeat:no-repeat;background-size:cover;">
        <div class="container">
            <h1 style="color:#fff!important">Gallery Photos</h1>
        </div>
    </div>
  <section class="mt-5">
     <div class="container">
          <div class="row" style="margin-left:40px;">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('image/g1.jpg')}}" class="card-img-top img-h" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('image/g2.jpg')}}" class="card-img-top img-h" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('image/g3.jpg')}}" class="card-img-top img-h" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
         </div>
         <div class="row" style="margin-left:40px;">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;"> 
                        <img src="{{asset('image/g4.jpg')}}" class="card-img-top img-h" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('image/g5.jpg')}}" class="card-img-top img-h" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('image/g6.jpg')}}" class="card-img-top img-h" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
         </div>
     </div>
  </section>
@include('Admin.partial.frontend_footer')
    
    </body>
        <!-- <script src="include_front/assist/js/bootstrap-select.min.js"></script>
        <script src="include_front/assist/js/jquery.bxslider.min.js"></script>
        <script src="include_front/assist/js/jquery.validate.min.js"></script>
        <script src="include_front/assist/js/theme.js"></script> -->
    </html>