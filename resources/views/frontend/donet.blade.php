<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i%7CCovered+By+Your+Grace" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" id="theme" href="include_front/assist/css/sweetalert.css"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Home</title>
</head>
<style>
    .font{
        font-weight:bold;
    }
</style>
<body>
@include('Admin.partial.navigation')

<br>
<hr>
<div class="container" style="text-align:left !important;">
    <div class="row">
        <div class="col-md-4">
          <img src="{{asset('image/barcode1.jpg')}}" width="100%" height="600px" alt="">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-6">
           <h3>Account Method Details</h3>
           <p><span class="font">Account Holer Name:-</span> OBC SAMAJ PICHDAVARG KALYAN SANGATHAN SAMITI</p>
           <p><span class="font">Account Number:-</span> 50210039220126</p>
           <p><span class="font">IFSC CODE:-</span> BDBL0001372</p>
           <p><span class="font">Branch:-</span> Guna</p>
           <p><span class="font">Online Payment Method :-</span> 8602308915</p>

        </div>
    </div>
</div>
<br>
@include('Admin.partial.frontend_footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>