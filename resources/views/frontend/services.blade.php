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
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
      
</head>
<body>
<div class="page-wrapper">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');



.container {
    transform-style: preserve-3d
}

.container .box {
    position: relative;
    width: 300px;
    height: 300px;
    margin: 20px;
    transform-style: preserve-3d;
    perspective: 1000px;
    cursor: pointer
}

.container .box .body {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: 0.9s ease
}

.container .box .body .imgContainer {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transform-style: preserve-3d
}

.container .box .body .imgContainer img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover
}

.container .box .body .content {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #333;
    backface-visibility: hidden;
    transform-style: preserve-3d;
    transform: rotateY(180deg)
}

.container .box:hover .body {
    transform: rotateY(180deg)
}

.container .box .body .content div {
    transform-style: preserve-3d;
    padding: 20px;
    background: linear-gradient(45deg, #FE0061, #FFEB3B);
    transform: translateZ(100px)
}

.container .box .body .content div h3 {
    letter-spacing: 1px
}
.imgs{
       height: 90px;
   }
.zoom {
  transition: transform .2s;
  width: 200px;
  height: 90px;
  margin: 0 auto;
}
.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
   transform: scale(1.5); 
   }

   @media (max-width: 768px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* display 3 */
@media (min-width: 768px) {
    
    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(33.333%);
    }
    
    .carousel-inner .carousel-item-left.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-33.333%);
    }
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}
</style>
@include('Admin.partial.navigation')
    <div class="inner-banner text-center" style="background:url({{asset('image/abc.webp')}});padding-top: 425px;position: relative; background-repeat:no-repeat;background-size:cover;">
        <div class="container">
            <h1 style="color:#fff!important">Services</h1>
        </div>
    </div>
  <section class="mt-5">
     <div class="container">
         <h1 class="mb-5">Our Services</h1>
        <div class="row">
            <div class="col-md-2">
               <div class="card" style="width: 10rem;height: 190px">
                    <div class="card-body">
                        <img class="imgs zoom" src="{{asset('image/service.png')}}" alt="">
                        <h6>Total Operationof Differently Abled</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
               <div class="card" style="width: 10rem;height: 190px">
                    <div class="card-body">
                        <img  class="imgs zoom"src="{{asset('image/service1.png')}}" alt="">
                        <h6>Aids and Appliances</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
               <div class="card" style="width: 10rem;height: 190px">
                    <div class="card-body">
                        <img class="imgs zoom" src="{{asset('image/service2.png')}}" alt="">
                        <h6>Skill Development</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
               <div class="card" style="width: 10rem;height: 190px">
                    <div class="card-body">
                        <img class="imgs zoom" src="{{asset('image/service3.png')}}" alt="">
                        <h6>Food & Cloth Distribution</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
               <div class="card" style="width: 10rem;height: 190px">
                    <div class="card-body">
                        <img class="imgs zoom" src="{{asset('image/service4.png')}}" alt="">
                        <h6>Free Treatement</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
               <div class="card" style="width: 10rem; height: 190px">
                    <div class="card-body">
                        <img class="imgs zoom" src="{{asset('image/service5.png')}}" alt="">
                        <h6>Operation of Differently Abled</h6>
                    </div>
                </div>
            </div>
        </div>
     </div>
  </section>

  <section>
  <div class="container d-flex align-items-center justify-content-center flex-wrap">
    <div class="box">
        <div class="body">
            <div class="imgContainer"> <img src="{{asset('image/img1.jpg')}}" alt=""> </div>
            <div class="content d-flex flex-column align-items-center justify-content-center">
                <div>
                    <h3 class="text-white fs-5">Post Title</h3>
                    <p class="fs-6 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="body">
            <div class="imgContainer"> <img src="{{asset('image/img2.png')}}" alt=""> </div>
            <div class="content d-flex flex-column align-items-center justify-content-center">
                <div>
                    <h3 class="text-white fs-5">Post Title</h3>
                    <p class="fs-6 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="body">
            <div class="imgContainer"> <img src="{{asset('image/img3.jpeg')}}" alt=""> </div>
            <div class="content d-flex flex-column align-items-center justify-content-center">
                <div>
                    <h3 class="text-white fs-5">Post Title</h3>
                    <p class="fs-6 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed cum neque, rem provident ex. Laboriosam perspiciatis modi eveniet in?</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section>
  <div class="container text-center my-3">
    <h2 class="font-weight-bold">OBC All India</h2>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="{{asset('image/slid.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="{{asset('image/slide1.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="{{asset('image/slide2.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="{{asset('image/slide3.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
  </div>
</section>
    
@include('Admin.partial.frontend_footer')
    <script>
        $('#recipeCarousel').carousel({
  interval: 1000
})

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});
    </script>
    </body>
    </html>