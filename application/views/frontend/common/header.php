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
  <link rel="stylesheet" href="<?php echo $url['css']; ?>">
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
                <!-- <img width="133" height="55" src="assets/img/headlogo.svg" alt="Logo" class="custom-logo"> -->
                LOGO
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
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Properties
                  </a>
                  <div class="dropdown-menu">
                    <!-- <a class="dropdown-item" href="#">Rented</a>
                    <a class="dropdown-item" href="#">Sell</a>
                    <a class="dropdown-item" href="#">Buy</a> -->
                    <a class="dropdown-item" href="<?php echo $url['home']; ?>">Home</a>
                    <a class="dropdown-item" href="<?php echo $url['list']; ?>">list</a>
                    <a class="dropdown-item" href="<?php echo $url['posttable']; ?>">posttable</a>
                    <a class="dropdown-item" href="<?php echo $url['recharge']; ?>">recharge</a>
                  </div>
                </li>


                <li class="  nav-item">
                  <a title="Recharge" href="<?php echo $url['recharge']; ?>" class="nav-link">
                    Recharge
                  </a>
                </li>
                <li class="  nav-item">
                  <a title="Recharge" href="<?php echo $url['wallet']; ?>" class="nav-link">
                    Wallet
                  </a>
                </li>
                <li class="  nav-item">
                  <a title="Refer & earn" href="<?php echo $url['referandearn']; ?>" class="nav-link">
                    Refer & earn
                  </a>
                </li>


                <li class="nav-item dropdown">
                  <button class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    My account
                  </button>
                  <div class="dropdown-menu">
                    
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Login">Login</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#register">Register</a>
                    
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
          <div class="left">
            <h5>Register</h5>
          </div>
          <div class="right">
            <h5>Let we help you to search your property here</h5>
            <p>Register</p>
            <div id="status" class="text-center"></div>
            <form id="reg" action="<?php echo base_url().'otp/send_otp'; ?>" method="post">
              <input type="text" name="uname" placeholder="Your Name">
              <input type="number" name="mno" placeholder="Your Number">
              <button>Register</button>
            </form>
            <p>If you have an account just Login here</p>
            <center><a href="#">login</a></center>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>
  <div class="modal fade" id="Login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" container-fluid modal-body">
          <div class="left">
            <h5>Register</h5>
          </div>
          <div class="right">
            <h5>login into your account</h5>
            <p>Login with mobile</p>
            <form action="" method="post">
            <input type="number" placeholder="Your Number">
            <a data-toggle="modal" data-target="#otp"><button>Login</button></a>
            </form>
            <p>New here ? Register with us</p>
            <center><a href="#">Register</a></center>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>
  <div class="modal fade" id="otp">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class=" container-fluid modal-body">
          <div class="left">
            <h5>Register</h5>
          </div>
          <div class="right">
            <h5>login into your account</h5>
            <p>Login with mobile</p>
            <input type="number" placeholder="verify">
            <input type="number" placeholder="verify">
            <button>Login</button>

            <p>New here ? Register with us</p>
            <center><a href="#">Register</a></center>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>