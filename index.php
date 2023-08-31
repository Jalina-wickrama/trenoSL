<?php
require_once('assets/inc/db.php');
$query = "select * from orrs_train";
$result = mysqli_query($con,$query);

?>




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

<!-- Check availability form-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript">
  $(function() {
    $("#lets_search").bind('submit',function() {
      var value = $('#current').val();
       $.post('phpsearchform.php',{value:value}, function(data){
         $("#search_results").html(data);
       });
       return false;
    });
  });
</script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Search for Trains</h4>
                    </div>
                    <div class="card-body">

                    
                    
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Current station</label>
                                        <input type="input" name="current" value="<?php if (isset($_POST['current'])) {$current = $_POST['current'];}  ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Destination station</label>
                                        <input type="input" name="destination" value="<?php if(isset($_POST['destination'])){ $destination = $_POST['destination']; }?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Search Root</label>
                                        <input type="input" name="route" value="<?php if(isset($_POST['route'])){ $route = $_POST['route']; }?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                  </br>
                                      <button id="showit" type="submit" class="btn btn-danger" >Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

<script type="text/javascript">
  function showFunc() {
  var x = document.getElementById("trainTB");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

                <div id="trainTB" class="card mt-4" style="">
                    <div class="card-body">
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                <td> Train Name </td>
                                <td> Departure Station </td>
                                <td> Destination Station </td>
                                <td>Your Station</td>
                                <td> Time </td>
                                <td>Book Train</td>
                                </tr>
                            </thead>
                            <tbody>
                            <!-- current =$current AND destination= $destination -->
                            <?php 

                                if(isset($_POST['current']) && isset($_POST['destination']) && isset($_POST['route']))
                                {
                                    $current = $_POST['current'] ;
                                    $destination = $_POST['destination'];
                                    $route = $_POST['route'];

                                    $query = "SELECT * FROM orrs_train WHERE current ='$current' OR destination ='$destination' OR route LIKE '%$route%'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['current'];?></td>
                                            <td><?php echo $row['destination'];?></td>
                                            <td><?php echo $route;?></td>
                                            <td><?php echo $row['time'];?></td>
                                            <td>
                                            <span class = "badge badge-pill badge-outline-danger">
                                                <a href = "user-book-ticket.php?id=<?php echo $row['id'];?>">Book</a>
                                            </span>    
                                            </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


<!-- Cards -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold ">Visit  Many Cities for the lowest price</h2>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/galle02.jpg" class="card-img-top">
                <div class="card-body">
                  <h5>Puttalam - Galle</h5>
                  <h6 class="mb-4">LKR 1850 Upwords</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 hr 13 mins to the destination
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        High-speed Train
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Stops
                    </span>

                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Limited Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Fully A/C
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Lavatories for each train couch
                    </span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/Colombo.jpg" class="card-img-top">
                <div class="card-body">
                  <h5>Jafna - Colombo</h5>
                  <h6 class="mb-4">LKR 2150 upwords</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Express
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        3 hrs 20 mins to the destination
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        High-speed Train
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        .
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Limited Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Fully A/C
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Lavatories for each couch
                    </span>
    
                  </div>
            
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/Kandy.jpg" class="card-img-top">
                <div class="card-body">
                  <h5>Colombo - Kandy</h5>
                  <h6 class="mb-4">LKR 690 upwords</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 hrs 54 mins to the destination
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        High-speed Train
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        USB charger ports available
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Customize ticket dates
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Limited free Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Meals
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Fully A/C
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Lavatories for each couch
                    </span>
                  </div>
                
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                  </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12 text-center mt-5">
            <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Packages >>></a>
        </div>
    </div>
</div>

<!-- Our Facilities-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold ">OUR FACILITIES</h2>

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/wifi.png" width="80px">
      <h5 class="mt-3">Free Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/Trainn.png" width="80px">
      <h5 class="mt-3">High-speed Trains</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/Entertainment.png" width="80px">
      <h5 class="mt-3">Free Entertainment on board</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/ac.png" width="80px">
      <h5 class="mt-3">Fully A/C</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/parking.png" width="80px">
      <h5 class="mt-3">Parking</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
       <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
    </div>
  </div>
</div>

<!-- Testimonials-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold ">TESTIMONIALS</h2>

<div class="container mt-5">
<div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/star.png" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Excepturi ratione molestias tempore alias laboriosam facilis,
          numquam.
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>          
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/star.png" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Excepturi ratione molestias tempore alias laboriosam facilis,
          numquam, iste, dolorem repellendus quisquam quaerat! 
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>          
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/star.png" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Excepturi ratione molestias tempore alias laboriosam facilis,
          numquam, iste, dolorem repellendus quisquam quaerat! 
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>          
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know more >>></a>
 </div>
</div>

<!-- Reach Us-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold ">REACH US</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63320.4180636735!2d80.58458149424186!3d7.294628572952353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!5e0!3m2!1sen!2slk!4v1691258827882!5m2!1sen!2slk" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel: +91777881839" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+94776541091
        </a>
        <br>
        <a href="tel: +91777881839" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+94764108233
        </a>
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i>Twitter
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i>Facebook
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i>Instagram
          </span>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class=" fw-bold fs-3 mb-2">Treno SL</h3>
        <p>weda pappa arishte hadanava. hari loku balayak ehi thibenava.
          game hamotama bedanava paw jim pappawa maga arinava. arishte illala jaramare
          jim pappagenuth hari barabare. ganu lamainta karadare. ara chuti kukuutai adare.
        </p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Services</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Booking</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-twitter me-1"></i>Twitter
      </a><br>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-facebook me-1"></i>Facebook
      </a><br>
      <a href="#" class="d-inline-block text-dark text-decoration-none">
        <i class="bi bi-instagram me-1"></i>Instagram
      </a><br>
    </div>
  </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Esoft Students</h6>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: false,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>
</html>