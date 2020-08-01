<html>

<head>
   <title>Wallet Recharge</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
   <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   <link rel="stylesheet" href="<?php echo $url['stylecss']; ?>">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


   <style>
     
 
      .fa-user {
         border: 2px solid gray;
         border-radius: 50%;
         padding: 4px 6px;
      }

      .plans {
         max-height: 380px;
         overflow: hidden;
         overflow-y: auto;
      }

      .user-fa {
         padding: 3px 0;
      }

      .user-flag {
         padding: 2px 0;
      }

      .caret {
         display: inline-block;
         width: 6px;
         height: 5px;
         background: url(https://www.oxigenwallet.com/public/images/tilt.png) no-repeat 0 0;
         margin-left: 0;
         vertical-align: middle;
         border: none;
      }

      .nav-pills .nav-link.active {
         background-color: transparent !important;
         color: #3D3D3D !important;
      }

      .ic {
         padding: 10px;
         font-size: 20px;
         width: 40px;
         text-align: center;
         text-decoration: none;
         margin: 5px 2px;
         border-radius: 50%;
      }

      .ic:hover {
         opacity: 0.7;
      }

      .fa-facebook {
         background: #3B5998;
         color: white;
      }

      .fa-facebook:hover {
         background: #3B5998;
         color: white;
      }

      .fa-twitter {
         background: #55ACEE;
         color: white;
      }

      .fa-twitter:hover {
         background: #55ACEE;
         color: white;
      }

      .fa-youtube {
         background: #bb0000;
         color: white;
      }

      .fa-youtube:hover {
         background: #bb0000;
         color: white;
      }

      .fa-instagram {
         background: #125688;
         color: white;
      }

      .fa-instagram:hover {
         background: #125688;
         color: white;
      }
   </style>

</head>

<body>
   <header class="header-area bg-white meu ">
      <div class="navbar-area ">
         <div id="btn">
            <div id='top'></div>
            <div id='middle'></div>
            <div id='bottom'></div>
         </div>
         <div id="box">
            <div id="items">
               <div class="item"><a href="recharge"><img src="../assets/img/Mob.svg" width="12px" style="margin-top:-5px; margin-right: 5px;" > Recharge & PayBills</a></div>
               <div class="item"><img src="../assets/img/buyplan.svg" width="19px" style="margin-top:-5px; margin-right: 5px;" >Buy Plan</div>
               <div class="item"><a href="refer"><img src="../assets/img/refer.svg" width="19px" style="margin-right: 5px;" >Refer And Earn</a></div>
               <div class="item"><a href="field"><img src="../assets/img/Field Expense.png" width="19px" style="margin-right: 5px;" > Field Expenses</a></div>
               <div class="item"><a href="addmoney"><img src="../assets/img/Add-Money.svg" width="19px" style="margin-right: 5px;" >Add Money</a></div>
               <div class="item"><a href="ticket"><img src="../assets/img/ticket .svg" width="19px" style="margin-right: 5px;" >Raise a Ticket</a></div>
              
               <hr class="style1">

               <div class="item"><a href="<?php echo $url['support']; ?>"><i class="fa fa-envelope" style="color: white;" aria-hidden="true" width="20px" style="margin-right: 5px;"></i> Support</a></div>
               <div class="item"><a><img src="../assets/img/about.svg" width="20px" style="margin-top:-5px; margin-right: 5px;"> About Us</a></div>
               <hr class="style1">
               <div style="padding-left: 1rem; color:grey; font-size:1.3rem;">connect & share on</div>
               <div style="padding-left: 1rem;">
                  <a href="#" class="ic fa fa-facebook"></a>
                  <a href="#" class="ic fa fa-instagram"></a>
                  <a href="#" class="ic fa fa-youtube"></a>
                  <a href="#" class="ic fa fa-twitter"></a>
               </div>


            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg">
                     <div class="logo lo-mm">
                        <a class="custom-logo-link " href="<?php echo base_url(); ?>">
                           <img width="133" height=30 src="<?php echo $url['image'] . 'logo/' . $site['site_logo'] ?>" alt="Logo" class="custom-logo">
                        </a>
                     </div>
                     <div id="navbarSupportedContent" class=" collapse navbar-collapse sub-menu-bar">
                        <ul id="nav" class="navbar-nav ml-auto ">
                           <li class=" nav-item">
                              <a style="color: rgb( 245, 57, 61 );" title="Refer and Earn" href="<?php echo $url['referandearn']; ?>" class="nav-link">
                                 Refer and Earn
                              </a>
                           </li>
                           <li class="nav-item m-1 brk ">
                              |
                           </li>
                           <li class=" nav-item">
                              <a title="Balance" href="#" class="nav-link">
                                 <img src="../assets/img/Balance.png" width="25px"> Balance <?php echo $post["all_data"][0]->recharge_wallet; ?>.00
                              </a>
                           </li>
                           <li class="mmvv nav-item">
                              <a title="Balance" href="#" class="nav-link wal_level">
                                  Level : <?php echo $level[0]; ?>
                              </a>
                           </li>
                           <li class="  nav-item m-1 brk ">
                              |
                           </li>
                           <!--li class="mx-2 nav-item">
                              <div class="dropdown user-flag">
                                 <img style=" margin-top: .3rem;" src="../assets/img/flag.png" width="30px" class=" dropbtn">
                                 <span class="caret"></span>
                                 <div class="dropdown-content">
                                    <a class="dropdown-item" href="#">India</a>
                                    <a class="dropdown-item" href="#">Nepal</a>
                                 </div>
                              </div>
                           </li>
                           <li class="  nav-item m-1 brk ">
                              |
                           </li-->
                           <li class=" nav-item">
                              <div class="mmvv dropdown user-fa">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                                 <span class="caret"></span>
                                 <div class="dropdown-content">
                                    <a class="dropdown-item" href="<?php echo $url['wallet']; ?>">Wallet</a>
                                    <a class="dropdown-item" href="<?php echo $url['support']; ?>">Raise Ticket</a>
                                    <a class="dropdown-item" href="<?php echo base_url() . 'login/logout'; ?>">Logout</a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                     
                  </nav>
                  <!-- navbar -->
                  

               </div>
            </div>
            <!-- row -->
         </div>
         <!-- container -->
      </div>
      <!-- navbar area -->
   </header>
   






   <div id="rechargeModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

         <div class="modal-content">
            <div class="modal-body text-center">
               <img width="80" src="<?php echo base_url() . 'assets/img/loading.gif' ?>" alt="" srcset="">
            </div>
         </div>

      </div>
   </div>


   