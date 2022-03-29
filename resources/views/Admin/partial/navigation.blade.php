<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
      .navbar
			{
			   background-color: #fff;
			   padding: 0;
			}
		.navbar-brand img
			{
				height: 40px;
				padding-left: 20px;
				border-radius: 65%;
			}

		.navbar-toggler
			{
				outline: none !important;			
		    }	

		.fa-bars
			{
				color: #000;
				font-size: 30px !important;
			}  
			 
		.navbar-nav li
			{
				padding: 0 10px;
			}
		.navbar-nav li a
			{
				color: #000!important;
				font-weight: 600;
				float: left;
				text-align: left;

			}
			 li a:hover{
				color: red!important;
			}
      .regis{
      display: block;
      font-size: 10px;
      text-decoration:none;
      color:#000;
    }
    .textstyle{
        text-align: center;
        color:#fff;
        margin-top:20px;
    }
    
</style>
<div class="container-fluide" style="background-color: #0b253c;height: 60px;">
    <div class="row" style="margin-right: 0!important;">
        <div class="col-md-3">
           <p class="textstyle">obcindia2022@gmail.com</p>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-3">
           <p class="textstyle">Need Help? Talk to an Expert 8602308915</p>
        </div>
    </div>
</div>
<section>
	<nav class="navbar navbar-expand-md  navbar-light m">
		 <!--logo on nav bar-->
		<a href="" class="navbar-brand">
		      <img  src="{{asset('image/logo2.webp')}}" width="75px" >
          <span class="regis">Reg.02/40/04/25447/22</span>
		 </a>
		 <!--button toggle-->
		<button class="navbar-toggler" data-toggle="collapse" data-target="#a">
			<i class="fa fa-bars"></i>
   	</button>
	<div class="collapse navbar-collapse" id="a">
			<ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <a class="nav-link"   href="{{url('/fronthome')}}" style="color:red!important;">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/media')}}">Media</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/about')}}">About</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/services')}}">Services</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/teams')}}">Team</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/projects')}}">Project</a>
          </li>
          <li class="nav-item"> 
          <a class="nav-link" href="{{url('/groups')}}">Group</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/donate')}}">Donate Here</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/login')}}">Login</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('/registration')}}">Registration</a>
          </li>								
			</ul> 
	</div>	 
	</nav><!--end of nav bar-->
	
	</section><!--end  0f navbar-->