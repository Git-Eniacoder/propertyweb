<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tirupati Insurance</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Header Start -->
  <header class="head">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <div class="logo">
              <a class="custom-logo-link " rel="home" href="#">
                <img width="133" height="55" src="assets/img/headlogo.svg" alt="Logo" class="custom-logo">
              </a>
            </div>
            <button class="navbar-toggler nav-dark bbb" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
            </button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
              <ul id="nav" class="navbar-nav ml-auto ">
                <li class=" nav-item">
                  <a title="Home" href="#" class="nav-link">
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
                  <a title="Recharge" href="recharge" class="nav-link">
                    Recharge
                  </a>
                </li>
                <li class="  nav-item">
                  <a title="Refer & earn" href="#" class="nav-link">
                    Refer & earn
                  </a>
                </li>


                <li class="  nav-item">
                  <button>Register/Login</button>

                </li>
              </ul>
            </div>
          </nav> <!-- navbar -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </header>
  <!-- Header end -->