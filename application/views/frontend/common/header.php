<!DOCTYPE html>
<html lang="en">

<head>
  <title>Wallet Recharge</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $url['stylecss']; ?>">
  <link rel="stylesheet" href="<?php echo $url['newhomecss']; ?>">

  <style>
  
 

  .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0px;
  background-color: crimson;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: rgb( 245, 57, 61 );
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  left:0px;
  font-size: 36px;
  

}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



  </style>  
</head>

<body>
  <!-- Header Start -->

  <!-- <header class="head">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <div class="logo">
              <a class="custom-logo-link " rel="<?php echo $url['home']; ?>" href="home">
                <img width="133" height="55" src="<?php echo $url['image'] . 'logo/' . $site['site_logo'] ?>" alt="Logo" class="custom-logo">

              </a>
            </div>
            <button class="navbar-toggler nav-dark bbb" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
            </button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
              <ul id="nav" class="navbar-nav ml-auto ">
                <li class=" nav-item">
                  <a title="Home" href="<?php echo $url['home']; ?>" class="nav-link">
                    Home
                  </a>
                </li>
                <li class=" nav-item">
                  <a title="Home" href="<?php echo $url['list']; ?>" class="nav-link">
                    List Property
                  </a>
                </li>
                <li class=" nav-item">
                  <a title="Home" href="<?php echo $url['post_property']; ?>" class="nav-link">
                    Post Property
                  </a>
                </li>


                <li class="nav-item">
                  <a title="Recharge" href="<?php echo $url['recharge']; ?>" class="nav-link">
                    Recharge
                  </a>
                </li>
                <li class="nav-item">
                  <a title="Recharge" href="<?php echo $url['referandearn']; ?>" class="nav-link">
                    Refer and Earn
                  </a>
                </li>
                <li class="nav-item">
                  <a title="Recharge" href="<?php echo base_url() . 'contact' ?>" class="nav-link">
                    Contact Us
                  </a>
                </li>
                <li class="nav-item">
                  <a title="Recharge" href="<?php echo base_url() . 'about' ?>" class="nav-link">
                    About Us
                  </a>
                </li>

                <li class="nav-item dropdown">
                  <button class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <?php echo isset($uname) ?  'Hey, ' . $uname : 'My Account'; ?>
                  </button>
                  <div class="dropdown-menu">

                    <?php if ($status == false) { ?>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#login">Login</a>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#register">Register</a>
                    <?php } else { ?>
                      <a class="dropdown-item" href="<?php echo $url['wallet']; ?>">Wallet</a>
                      <a class="dropdown-item" href="<?php echo $url['support']; ?>">Raise Ticket</a>
                      <a class="dropdown-item" href="<?php echo base_url() . 'login/logout'; ?>">Logout</a>
                    <?php } ?>
                  </div>
                </li>
              </ul>
            </div>
          </nav> 
        </div>
      </div> 
    </div> 
  </header> -->


  <div class="nav_header">
    <div class="container">
      <nav class="wal_nav">
        <div class="nav_left">
          <div class="logo">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo $url['image'] . 'logo/' . $site['site_logo'] ?>" alt="" class="wal_logo_n"></a>
          </div>
        </div>
        <div class="nav_right">
          <div class="wal_nav_list">
            <div class="wal_nav_list_left">
              <div class="nav_list_icons">
                <a href="<?php echo $url['referandearn']; ?>" class="wal_nav_links wal_mob_off">Refer and Earn</a>
              </div>
              <div class="nav_list_icons">
                <a href="<?php echo $url['list']; ?>" class="wal_nav_links wal_mob_off">List Property</a>
              </div>

              <?php if ($status == false) { ?>   
              <div class="nav_list_icons">
                <span><i class="fa fa-user wal_nav_links" aria-hidden="true"></i></span>
                <span><a href="#" data-toggle="modal" data-target="#login"  class="wal_nav_links">Login /</a></span>
                <span><a href="#" data-toggle="modal" data-target="#register" class="wal_nav_links">Sign up</a></span>
              </div>
              <?php }else{ ?>
              <div class="nav_list_icons">
                <a href="#" id="navbardrop" data-toggle="dropdown" class="wal_nav_links dropdown-toggle"><?php echo 'Hey, ' . $uname; ?></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo $url['wallet']; ?>">Wallet</a>
                    <a class="dropdown-item" href="<?php echo $url['support']; ?>">Raise Ticket</a>
                    <a class="dropdown-item" href="<?php echo base_url() . 'login/logout'; ?>">Logout</a>
                </div>
              </div>
              <?php } ?>
            </div>

            <div class="wal_nav_list_right">
              <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
            </div>
            <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

              <div class="wal_mob_log">
              <?php if ($status == false) { ?>  

              <div class="">
                <!-- <span></span> -->
                <!-- <span><a href="#" data-toggle="modal" data-target="#login"  class="side_link">Login /</a><a href="#" data-toggle="modal" data-target="#register" class="side_link">Sign up</a></span> -->
                <span><a href="#" data-toggle="modal" data-target="#login"  class="side_link">Login /</a></span><span><a href="#" data-toggle="modal" data-target="#register" class="side_link">Sign up</a></span>
               
              </div>


              <?php }else{ ?>
              <div class="">
                <a href="#" id="navbardrop" data-toggle="dropdown" class="side_link dropdown-toggle"><?php echo 'Hey, ' . $uname; ?></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item wal_mob_dd" href="<?php echo $url['wallet']; ?>">Wallet</a>
                    <a class="dropdown-item wal_mob_dd" href="<?php echo $url['support']; ?>">Raise Ticket</a>
                    <a class="dropdown-item wal_mob_dd" href="<?php echo base_url() . 'login/logout'; ?>">Logout</a>
                </div>
              </div>
              <?php } ?>
              </div>
              
              <a href="<?php echo $url['list']; ?>" class="side_link">List Property</a>
              <a href="<?php echo $url['post_property']; ?>" class="side_link">Post Property</a>
              <a href="<?php echo $url['referandearn']; ?>" class="side_link mob_on">Refer and Earn</a>
              <a href="<?php echo base_url() . 'about' ?>" class="side_link">About Us</a>
              <a href="<?php echo base_url() . 'policy' ?>" class="side_link">Privacy Policy</a>
              <a href="<?php echo base_url() . 'contact' ?>" class="side_link">Contact</a>
            </div>
          </div>
        </div>

        <!-- <div class="wal_nav_dropdown">
          <div class="searchbar_bx_close">
            <i class="fa fa-times serch_close" aria-hidden="true"></i>
          </div>
          <a href="" class="wal_nav_dropdown_links">Profile</a>
          <a href="" class="wal_nav_dropdown_links">Wallet</a>
          <a href="" class="wal_nav_dropdown_links">List Property</a>
          <a href="" class="wal_nav_dropdown_links">Refer and Earn</a>
        </div> -->

        
      </nav>
    </div>
  </div>


  <!-- Header end -->


  <div class="modal fade" id="register">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" container-fluid modal-body">

          <div class="row">
            <div class="col login_bx">

              <div class="login_head">
                <h5>Register Your Account With Us</h5>
              </div>

              <p>Create Your Account to Avail Best Deal</p>
              <div id="status" class="text-center"></div>
              <form id="reg" action="<?php echo base_url() . 'otp/send_otp'; ?>" method="post">
                <input type="text" name="uname" placeholder="Your Name" class="login_inp">
                <input type="number" name="mno" placeholder="Your Number" class="login_inp">
                <input type="password" name="password" placeholder="Password" class="login_inp">
                <input type="password" name="confirm_password" placeholder="Confirm Password" class="login_inp">
                <div>
                  <button class="login_btn">Registration</button>
                </div>
              </form>

              <div class="login_bot">
                <p>If you have an account just <a id="mlog" class="btn text-danger"> Login here</a></p>
              </div>


            </div>
          </div>


        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" container-fluid modal-body">
          <!-- <div class="left">
            <h5>Login</h5>
          </div> -->


          <div class="row">
            <div class="col login_bx">
              <div class="login_head">
                <h5>Login into your account</h5>
              </div>
              <!-- <p>Login with mobile</p> -->
              <div id="logsts" class="text-center"></div>
              <form id="loginn" action="<?php echo base_url() . 'login/user_login'; ?>" method="post">
                <input type="password" name="pno" placeholder="Your Number" class="login_inp">
                <input type="password" name="password" placeholder="Your Password" class="login_inp">
                <div>
                  <button class="login_btn">Login</button>
                </div>
              </form>
              <a class="p-1 btn login_forgot" id="para">
                <p style="color:red;">Forgot Password ?</p>
              </a>
              <p>If you dont have an account just <a id="mreg" class="btn text-danger">Register here</a></p>
              <!-- <center><a class="btn" id="mreg">Register</a></center> -->
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>


  <div class="modal fade" id="otp">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" container-fluid modal-body">



          <div class="row">
            <div class="col login_bx">


              <div>
                <h5>Forget Password ? Don't Worry</h5>
                <p>Enter Your Registered Number</p>
                <div id="resetid" class="text-center"></div>
                <form id="frest" action="<?php echo base_url() . 'otp/reset'; ?>" method="post">
                  <input type="number" name="mobile" placeholder="Mobile no" class="login_inp">
                  <button class="login_btn">Submit</button>
                </form>
                <p class="reg_line">If you dont have an account just <a href="#" class="text-danger">Register here</a></p>
              </div>

            </div>
          </div>


        </div>


      </div>
    </div>
  </div>

  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
  </script>  