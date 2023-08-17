<?php
    session_start();
    include('assets/inc/config.php');

    if(isset($_POST['train_fare_confirm_checkout']))
    {
     
            $pass_name=$_POST['pass_name'];
            //$pass_lname = $_POST['pass_lname'];
            //$pass_phone=$_POST['pass_phone'];
            $pass_addr=$_POST['pass_addr'];
            $pass_email=$_POST['pass_email'];        
            $train_name = $_POST['train_name'];
            $train_no = $_POST['train_no'];
            $train_dep_stat = $_POST['train_dep_stat'];
            $train_arr_stat = $_POST['train_arr_stat'];
            $train_fare = $_POST['train_fare'];
            // $fare_payment_code = $_POST['fare_payment_code'];
            //sql file to update the table of passengers with the new captured information
            $query="insert into orrs_train_tickets (pass_name, pass_addr, pass_email, train_name, train_no, train_dep_stat, train_arr_stat,  train_fare) values (?,?,?,?,?,?,?,?)";
            $stmt = $mysqli->prepare($query); //prepare sql and bind it later
            $rc=$stmt->bind_param('ssssssss', $pass_name, $pass_addr, $pass_email, $train_name, $train_no, $train_dep_stat, $train_arr_stat, $train_fare);
            $stmt->execute();
            if($stmt)
            {
                $succ = "Ticket Payment Confirmed";
            }
            else 
            {
                $err = "Please Try Again Later";
            }
            echo"<script>alert('Your booking Has Been Updated Successfully');</script>";
            }
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
          <a class="nav-link  me-2" aria-current="page" href="index.php">Offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="train-tracker.php">Train tracking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active me-2" href="user-book-ticket.php">Book a ticket</a>
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
        <img src="images/srirail6" class="w-100 d-block ">
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



<!-- User book ticket-->

<div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Book Train </h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">

              <li class="breadcrumb-item active">Book A ticket </li>
            </ol>
          </nav>
        </div>

        <?php if(isset($succ)) {?>
                                <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Success!","<?php echo $succ;?>!","success");
                            },
                                100);
                </script>

            <?php } ?>

            <div class="row gy-5">
            <div class="col-md-12 ">
              <div class="card card-border-color card-border-color-danger ">
                <div class="card-header card-header-divider"><span class="card-subtitle">Fill All Details</span></div>
                <div class="card-body ">
                  <form method ="POST">
                    <div class="form-group row gy-5">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">My First Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="pass_name" id="inputText3" type="text">
                      </div>
                    </div>
                  
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">My email</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="pass_email" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">My Address</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="pass_addr" id="inputText3" type="text">
                      </div>
                    </div>


                    <!--Lets get the details of one single train using its Train Id 
                    and pass it to this user instance-->
                    <?php
                        $id=$_GET['id'];
                        $ret="select * from orrs_train where id=?";
                        $stmt= $mysqli->prepare($ret) ;
                        $stmt->bind_param('i',$id);
                        $stmt->execute() ;//ok
                        $res=$stmt->get_result();
                        //$cnt=1;
                        while($row=$res->fetch_object())
                    {
                    ?>
                                        <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Train Number</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly name="train_no" value="<?php echo $row->number;?>" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Train Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly name="train_name" value="<?php echo $row->name;?>" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">My Departure Station</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly name="train_dep_stat" value="<?php echo $row->current;?>" id="inputText3" type="text">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">My Arrival Station</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly name="train_arr_stat" value="<?php echo $row->destination;?>" id="inputText3" type="text">
                      </div>
                    </div>
    
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Train Fare</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" readonly name="train_fare" value="<?php echo $row->fare;?>"  id="inputText3" type="text">
                      </div>
                    </div>
                    <!--End TRain  isntance-->
                    <?php }?>

                 

                    <div class="col-sm-6">
                        <p class="text-right">
                            <input class="btn btn-space btn-outline-danger" value ="Confirm Payment" name = "train_fare_confirm_checkout" type="submit">
                            <button class="btn btn-space btn-secondary">Cancel</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>






        <!--footer-->
        <?php include('assets/inc/footer.php');?>
        <!--EndFooter-->
      </div>


      

</body>