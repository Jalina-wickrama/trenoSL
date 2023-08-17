<?php
   /**
    *Server side code to get details of single passenger using id 
    */
    $aid=$_SESSION['admin_id'];
    $ret="select * from orrs_admin where admin_id=?";//fetch details of pasenger
    $stmt= $mysqli->prepare($ret) ;
    $stmt->bind_param('i',$aid);
    $stmt->execute() ;//ok
    $res=$stmt->get_result();
    //$cnt=1;
    while($row=$res->fetch_object())
    {
?>

<link rel="stylesheet" href ="assets/css/admin.css" type="text/css"/>


    <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div href="emp-dashboard.php">
          <a href="emp-welcome.php"><img src="assets/img/Trenosllogo.png" height="35px" width="100%" style="padding-left: 10px; padding-right: 60px;"/></a>
          </div>
           <div class="page-title" style="color: #ffff;"><span>Hello <?php echo $row->admin_uname;?> This is Your Dashboard!</span></div> 
          <div class="be-right-navbar">
          <a href="emp-welcome.php"><img src="assets/img/telephone.png" class="navbarlogo"/></a>
          <a href="emp-dashboard.php"><img src="assets/img/home.png"  class="navbarlogo"/></a>
          <a href="admin-manage-employee.php"><img src="assets/img/profile.png"  class="navbarlogo"/></a>
          <a href="emp-manage-train.php"><img src="assets/img/train.png"  class="navbarlogo"/></a>
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="assets/img/profile/<?php echo $row->admin_dpic;?>" alt="Avatar"><span class="user-name"></span></a>
                <div class="dropdown-menu" role="menu">     
                  <div class="user-info">
                    <div class="user-name"><?php echo $row->admin_email;?></div>
                    <div class="user-position online">Online</div>
                  </div><a class="dropdown-item" href="emp-profile.php"><span class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item" href="emp-logout.php"><span class="icon mdi mdi-power"></span>Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<?php }?>