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
            <h1 style="color:#fff!important">Project</h1>
        </div>
    </div>
  <section class="mt-5">
      <div class="container">
          <div class="row">
              <div class="col-md-12 col-lg-12">
                  <h1>Projects</h1>
                  <div class="table-responsive mt-3" style="box-shadow:0px 0px 2px 2px">
                      <table class="table table-bordered table-striped text-left">
                        <thead style="box-shadow:5px 5px 4px">
                        <tr>
                        <th class="resource-name">Project Name</th>
                        <th>Client Name</th>
                        <th class="resource-link">Read</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                        <td>Punjab National Bank Housing Finance Limited (PNBHFL) </td>
                        <td>NICT Technologies Pvt. Ltd.</td>
                        <td><a class="btn btn-success btn-sm" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">View</a></td>
                        </tr>


                        <tr>
                        <td>Paytm Payments Bank Ltd customer, Know Your Customer (KYC) validation </td>
                        <td>One97 Communications Limited </td>
                        <td><a class="btn btn-success btn-sm" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">View</a></td>
                        </tr>

                        <tr>
                        <td>Airtel Payments Bank Limited </td>
                        <td>NICT Technologies Private limited </td>
                        <td><a class="btn btn-success btn-sm" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">View</a></td>
                        </tr>


                        <tr>
                        <td>RFID Tag Issuance, Marketing and Recharge </td>
                        <td>State Bank of India</td>
                        <td><a class="btn btn-success btn-sm" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">View</a></td>
                        </tr>

                        <tr>
                        <td>Financial Inclusion under PMJDY scheme</td>
                        <td>State Bank of India</td>
                        <td><a class="btn btn-success btn-sm" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">View</a></td>
                        </tr>
                        <tr>
                        <td>Financial Inclusion under PMJDY scheme
                        </td>
                        <td>Bank of India </td>
                        <td><a class="btn btn-success btn-sm" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">View</a></td>
                        </tr>
                        <tr>
                        <td>Financial Inclusion under PMJDY scheme</td>
                        <td>Bank of Baroda </td>
                        <td><a class="btn btn-success btn-sm" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">View</a></td>
                        </tr>
                        <tr>
                        <td>Financial Inclusion under PMJDY scheme</td>
                        <td>Chhattisgarh Gramin Bank</td>
                        <td><a class="btn btn-success btn-sm" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal"  href="#">View</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
<!------*****************************************************************************************************8--->
              </div>
          </div>
      </div>
  </section>
@include('Admin.partial.frontend_footer')
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Summary Of Project</h5>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive mt-3" style="box-shadow:0px 0px 2px 2px">
                    <table class="table table-bordered table-striped" style="width:100%">
                        <tr>
                            <th>Principal Owner :</th>
                            <td>Punjab National Bank Housing Finance Limited (PNBHFL)</td>
                        </tr>
                        <tr>
                            <th>Company Name :</th>
                            <td>NICT Technologies Pvt. Ltd.</td>
                        </tr>
                        <tr>
                            <th>Agreement Date :</th>
                            <td>19 April 2017</td>
                        </tr>
                        <tr>
                            <th>Period of contract :</th>
                            <td>One year from the date of assignment, for all the Areas of Activity</td>
                        </tr>
                        <tr>
                            <th>Work Start Date :</th>
                            <td>12 July 2017</td>
                        </tr>
                        <tr>
                            <th>Work Areas : </th>
                            <td>Indore & Ratlam in Madhya Pradesh, Kota in Rajasthan, Thane in Maharashtra</td>
                        </tr>
                        <tr>
                            <th>Services Offered :</th>
                            <td>Fixed Deposit Receipt (FDR)</td>
                        </tr>
                        <tr>
                            <th>Scope of work :</th>
                            <td>i). Soliciting of potential customers to avail of the Financial Products of the PNBHFL.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    </body>
    </html>