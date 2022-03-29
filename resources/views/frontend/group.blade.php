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
            <h1 style="color:#fff!important">Group</h1>
        </div>
    </div>
  <section class="mt-5">
      <div class="container">
          <h1 class="mb-5">All Groups</h1>
          <hr>
          <div class="row" style="height: 300px;">
              <div class="col-md-4 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('image/ngo.jpg')}}" class="card-img-top" alt="..." style="height: 250px;border-radius: 50%;">
                    </div>
              </div>
              <div class="col-md-8 col-lg-8">
                    <div class="card" style="width: 100%;">
                        <div class="table-responsive" style="box-shadow:0px 0px 2px 2px">
                            <table class="table table-bordered table-striped text-left" style="width:100%">
                                <tr>
                                    <th>Group Name :</th>
                                    <td>ALL INDIA OBC FOUNDATION</td>
                                </tr>
                                <tr>
                                    <th>Description:</th>
                                    <td>CHILDLINE 1098 is a phone number that spells hope for millions of children
                                         across India. It is a 24-hour day, 365 days a year, free emergency phone service 
                                         for children in need of aid and assistance. We respond to the emergency needs of 
                                         children and link them to relevant services for their 
                                         long-term care and rehabilitation. We have, to date,
                                         connected to three million children across the nation, offering them care and protection.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
              </div>
          </div>
          <div class="row" style="height: 300px;">
              <div class="col-md-4 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('image/ngo1.jpg')}}" class="card-img-top" alt="..." style="height: 250px;border-radius: 50%;">
                    </div>
              </div>
              <div class="col-md-8 col-lg-8">
                    <div class="card" style="width: 100%;">
                        <div class="table-responsive" style="box-shadow:0px 0px 2px 2px">
                            <table class="table table-bordered table-striped text-left" style="width:100%">
                                <tr>
                                    <th>Group Name :</th>
                                    <td>Akshay Patra Donation</td>
                                </tr>
                                <tr>
                                    <th>Description:</th>
                                    <td>Make a charitable donation to provide hot meals to children every 
                                        day for 1 academic year. Donate to Akshaya Patra & provide freshly cooked meals
                                         with the Mid-Day Meal Programme. Support Pregnant Women.
                                         Feed Homeless Mothers. Services: Mid Day Meal Programme, Happiness Kits..</td>
                                </tr>
                            </table>
                        </div>
                    </div>
              </div>
          </div>
          <div class="row" style="height: 300px;">
              <div class="col-md-4 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('image/ngo2.jpg')}}" class="card-img-top" alt="..." style="height: 250px;border-radius: 50%;">
                    </div>
              </div>
              <div class="col-md-8 col-lg-8">
                    <div class="card" style="width: 100%;">
                        <div class="table-responsive" style="box-shadow:0px 0px 2px 2px">
                            <table class="table table-bordered table-striped text-left" style="width:100%">
                                <tr>
                                    <th>Group Name :</th>
                                    <td>NARAYAN SEVA TRUST</td>
                                </tr>
                                <tr>
                                    <th>Description:</th>
                                    <td>A non-governmental organization (NGO) is
                                         a non-profit group that functions independently of any government.
                                          NGOs, sometimes called civil societies, are organized on community,
                                           national and international levels to serve a 
                                        social or political goal such as humanitarian causes or the environment..</td>
                                </tr>
                            </table>
                        </div>
                    </div>
              </div>
          </div>
      </div>
  </section>
@include('Admin.partial.frontend_footer')
    
    </body>
    </html>