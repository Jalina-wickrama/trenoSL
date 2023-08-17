<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treno SL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="admin\assets\css\admin.css">
    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media and (max-width: 575px) {
            .availability-form{
              margin-top: 25px;
              padding: 0 35px;
            }           
        }

        .custom-bg{
    background-color: #C70039 !important;
    border: 1px solid #C70039 !important;
  }
  .custom-bg:hover{
    background-color: #900C3F !important;
    border-color: #900C3F !important;
}
    </style>
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
          <a class="nav-link active me-2" aria-current="page" href="#">Offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="train-tracker.php">Train tracking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="search-train.php">Book a ticket</a>
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