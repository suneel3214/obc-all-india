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
<div class="container">
    <div class="row">
        <h1>Let’s meet with our expert.</h1>
        <div class="col-md-6">
           <div class="card" style="background-color: cadetblue;">
                <div class="card-header">
                    <h3 class="card-title">Contact Us</h3>
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-lg-12">
                            <form action="">
                                <input class="form-control form-control-sm  mb-4" placeholder=" Enter Name" type="text">
                                <input class="form-control  mb-4" placeholder="Enter Email" type="text">
                                <textarea name="" class="form-control" id="" placeholder="Comment" cols="30" rows="7"></textarea>
                                <button class="btn btn-success mt-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3><span class="font">Email:-</span> obcindia2022@gmail.com</h3>
            <h3><span class="font">Contact:-</span> 8602308915</h3>
        </div>
    </div>
</div>
<br>
@include('Admin.partial.frontend_footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>