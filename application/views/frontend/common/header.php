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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $url['stylecss']; ?>">
</head>

<body>
  <!-- Header Start -->
  
  <header class="head">
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
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Properties
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo $url['posttable']; ?>">Posted Property</a>
                  </div>
                </li> -->

                <li class="nav-item">
                  <a title="Recharge" href="<?php echo $url['recharge']; ?>" class="nav-link">
                    Recharge
                  </a>
                </li>
                <li class="nav-item">
                  <a title="Recharge" href="<?php echo base_url().'contact' ?>" class="nav-link">
                    Contact Us
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
          </nav> <!-- navbar -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </header>
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
                <p>If you have an account just <a id="mlog" class="btn text-primary"> Login here</a></p>
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
                <p>Forgot Password ?</p>
              </a>
              <p>If you dont have an account just <a id="mreg" class="btn text-primary">Register here</a></p>
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
              <div class="login_head">
                <h5>Login into your account</h5>
              </div>


              <div >
                <h5>Forget Password ? Don't Worry</h5>
                <p>Enter Your Registered Number</p>
                <div id="resetid" class="text-center"></div>
                <form id="frest" action="<?php echo base_url() . 'otp/reset'; ?>" method="post">
                  <input type="number" name="mobile" placeholder="Mobile no" class="login_inp">
                  <button class="login_btn">Submit</button>
                </form>
                <p class="reg_line">If you dont have an account just <a href="#">Register here</a></p>
              </div>

            </div>
          </div>


        </div>


      </div>
    </div>
  </div>