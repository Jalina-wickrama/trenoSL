<?php
   /**
    *Server side code to get details of single passenger using id 
    */
    $aid=$_SESSION['pass_id'];
    $ret="select * from orrs_passenger where pass_id=?";//fetch details of pasenger
    $stmt= $mysqli->prepare($ret) ;
    $stmt->bind_param('i',$aid);
    $stmt->execute() ;//ok
    $res=$stmt->get_result();
    //$cnt=1;
    while($row=$res->fetch_object())
    {
?>
    <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="be-navbar-header">
            <a href="emp-welcome.php"><img src="assets/img/Trenosllogo.png" height="35px" width="100%" style="padding-left: 10px; padding-right: 60px;"/></a>
          </div>
          <div class="page-title"><span>Hello <?php echo $row->pass_uname;?> Wellcome!</span></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="assets/img/profile/<?php echo $row->pass_dpic;?>" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <div class="dropdown-menu" role="menu">     
                  <div class="user-info">
                    <div class="user-name"><?php echo $row->pass_fname;?> <?php echo $row->pass_lname;?></div>
                    <div class="user-position online">Online</div>
                  </div><a class="dropdown-item" href="pass-profile.php"><span class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item" href="pass-logout.php"><span class="icon mdi mdi-power"></span>Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<?php }?>