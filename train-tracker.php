<?php
if (isset ($_POST["direct1"]))
{
  header('Location:individual-train-tracking.php');
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treno SL Real-time Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="admin\assets\css\admin.css">

    
</head>
<body class="bg-light">

<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">

    <!--<a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Treno SL</a>-->
    
        <img src="images/Trenosllogo.png" alt="logo" width="{conf.logoWidth}" height="35" href="index.php">
      
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link me-2"  href="index.php">Offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active me-2" aria-current="page" href="train-tracker.php">Train tracking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="user-book-ticket.php">Book a ticket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>  
      </ul>
      <div class="d-flex">
		<a class=" btn btn-outline-dark shadow-none me-lg-3 me-2" href="admin/emp-login.php" target="_blank">Admin</a>
		<a class=" btn btn-outline-dark shadow-none" href="pass-login.php" target="_blank">Passenger</a>
    </div>
    </div>
  </div>
</nav>

<!-- Image Swiper -->
<div class="container-fluid px-lg-2 ">
  <div class="swiper swiper-container" >
    <div class="swiper-wrapper"  >
      <div class="swiper-slide" >
        <img src="images/srirail1.jpg" class="w-100 d-block ">
      </div>
      <div class="swiper-slide">
        <img src="images/srirail6.jpg" class="w-100 d-block ">
      </div>
      <div class="swiper-slide">
        <img src="images/srirail3.jpg" class="w-100 d-block ">
      </div>
      <div class="swiper-slide">
        <img src="images/srirail4.jpg" class="w-100 d-block ">
      </div>
    </div>
  </div>
</div>


<!-- track trail-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold ">Track Your Train</h2>


<div id="trainTB" class="card mt-4" style="width:100%" > 
                    <div class="card-body">
                    <div class="container text-left">
                      <div class="row">
                        <div class="col" >
                        <h5>Running Trains</h5>
                        </div>
                        <div class="col text-end">
                        <?php
                          date_default_timezone_set('Asia/Kolkata');
                          $date = date('h:i');
                          echo "Last Updatted : ", $date;
                          ?>
                        </div>
                      </div><br/>
                      
                        <table class="table table-borderd ">
                            <thead>
                                <tr class="mt-10">
                                <td style="color: #FF0000; font-size:medium"><img src="images/train (2).png" alt="" height='25' width='30' style="margin-right: 10px;">UL 907</td>
                                <td> Maradhana <b>12.30AM</b> → Nuwara Eliya <b>4.45PM</b></td>
                                <td style="font-size:x-small;"> <img src="images/black-circle.png" alt="" height='10' width='10' style="margin-right: 10px;">Not Updated <br/>
                                <img src="images/black-circle (1).png" alt="" height='10' width='10' style="margin-right: 10px;"> On time </td>
                                <td> 
                                  <span class = "">
                                                <a href = "individual-train-tracking.php"> > </a>
                                  </span> 
                                </td>
                                </tr>
                                <tr class="mt-10" >
                                <td style="color: #FF0000; font-size:medium"><img src="images/train (2).png" alt="" height='25' width='30' style="margin-right: 10px;">UL 105</td>
                                <td> Colombo <b>10.30AM</b> → Anuradhapura <b>3.50PM</b></td>
                                <td style="font-size:x-small;"> <img src="images/black-circle.png" alt="" height='10' width='10' style="margin-right: 10px;">Not Updated <br/>
                                <img src="images/black-circle (1).png" alt="" height='10' width='10' style="margin-right: 10px;"> On time </td>
                                <td> <button class="btn " name="direct"> > </button> </td>
                                </tr>
                                <tr class="mt-10">
                                <td style="color: #FF0000; font-size:medium"><img src="images/train (2).png" alt="" height='25' width='30' style="margin-right: 10px;">UL 660</td>
                                <td> Puttalam <b>9.45AM</b> → Galle <b>3.35PM</b></td>
                                <td style="font-size:x-small;"> <img src="images/black-circle.png" alt="" height='10' width='10' style="margin-right: 10px;">Not Updated <br/>
                                <img src="images/black-circle (1).png" alt="" height='10' width='10' style="margin-right: 10px;"> On time </td>
                                <td> <button class="btn"  name="direct"> > </button></td>
                                </tr>
                                <tr class="mt-10">
                                <td style="color: #FF0000; font-size:medium"><img src="images/train (2).png" alt="" height='25' width='30' style="margin-right: 10px;">UL 901</td>
                                <td> Kandy <b>9.30AM</b> → Colombo <b>1.45PM</b></td>
                                <td style="font-size:x-small;"> <img src="images/black-circle.png" alt="" height='10' width='10' style="margin-right: 10px;">Not Updated <br/>
                                <img src="images/black-circle (1).png" alt="" height='10' width='10' style="margin-right: 10px;"> On time </td>
                                <td> <button class="btn"  name="direct"> > </button></td>
                                </tr>
                                <tr class="mt-10">
                                <td style="color: #FF0000; font-size:medium"><img src="images/train (2).png" alt="" height='25' width='30' style="margin-right: 10px;">UL 501</td>
                                <td> Colombo <b>9.15AM</b> → Matale <b>2.45PM</b></td>
                                <td style="font-size:x-small;"> <img src="images/black-circle.png" alt="" height='10' width='10' style="margin-right: 10px;">Not Updated <br/>
                                <img src="images/black-circle (1).png" alt="" height='10' width='10' style="margin-right: 10px;"> On time </td>
                                <td> <button class="btn"  name="direct"> > </button></td>
                                </tr>
                                <tr class="mt-10">
                                <td style="color: #FF0000; font-size:medium"><img src="images/train (2).png" alt="" height='25' width='30' style="margin-right: 10px;">UL 907</td>
                                <td> Gampaha <b>8.55AM</b> → Colombo <b>11.53AM</b></td>
                                <td style="font-size:x-small;"> <img src="images/black-circle.png" alt="" height='10' width='10' style="margin-right: 10px;">Not Updated <br/>
                                <img src="images/black-circle (1).png" alt="" height='10' width='10' style="margin-right: 10px;"> On time </td>
                                <td> <button class="btn"  name="direct"> > </button></td>
                                </tr>
                                 <tr class="mt-10">
                                <td style="color: #FF0000; font-size:medium"><img src="images/train (2).png" alt="" height='25' width='30' style="margin-right: 10px;">UL 790</td>
                                <td> Colombo <b>8.40AM</b> → Puttalam <b>10.55AM</b></td>
                                <td style="font-size:x-small;"> <img src="images/black-circle.png" alt="" height='10' width='10' style="margin-right: 10px;">Not Updated <br/>
                                <img src="images/black-circle (1).png" alt="" height='10' width='10' style="margin-right: 10px;"> On time </td>
                                <td> <button class="btn"  name="direct"> > </button></td>
                                </tr>
                            </thead>
                          </table>
                  </div>
                </div>
              </div>

    <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Esoft Students</h6>