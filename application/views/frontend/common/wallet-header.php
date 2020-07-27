<html>
   <head>
      <title>Wallet Recharge</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <link rel="stylesheet" href="<?php echo $url['stylecss']; ?>">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      
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
                  <div class="item"><a href="recharge"><img src="../assets/img/Mob.svg" width="12px" style="margin-top:-5px; margin-right: 5px;"> Recharge & PayBills</a></div>
                  <div class="item"><img src="../assets/img/buyplan.svg" width="20px" style="margin-top:-5px; margin-right: 5px;">Buy Plan</div>
                  <div class="item"><a href="refer"><img src="../assets/img/refer.svg" width="20px" style="margin-right: 5px;">Refer And Earn</a></div>
                  <div class="item"><a href="field"><img src="../assets/img/Field Expense.png" width="20px"style="margin-right: 5px;" > Field Expeses</a></div>
                  <div class="item"><a href="addmoney"><img src="../assets/img/Add-Money.svg" width="20px"style="margin-right: 5px;" >Add Money</a></div>
                  <hr class="style1">
                  <div class="item"><a href="ticket"><img src="../assets/img/ticket.svg" width="25px" style="margin-top:-5px; margin-right: 5px;">Raise Ticket</a></div>
                  <div class="item"><a href="<?php echo $url['support']; ?>"  ><i class="fa fa-envelope" style="color: white;" aria-hidden="true" width="20px"style="margin-right: 5px;"></i> Suppoprt</a></div>
                  <div class="item"><a ><img src="../assets/img/about.svg" width="20px" style="margin-top:-5px; margin-right: 5px;">  About us</a></div>
                  <hr class="style1">
                  <div style="padding-left: 1rem; color:grey; font-size:1.3rem;" >connect & share on</div>
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
                           <a class="custom-logo-link "  href="<?php echo base_url(); ?>">
                           <img width="133" height=30 src="<?php echo $url['image'] . 'logo/' . $site['site_logo'] ?>" alt="Logo" class="custom-logo">
                           </a>
                        </div>
                        <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
                           <ul id="nav" class="navbar-nav ml-auto ">
                              <li class=" nav-item">
                                 <a style="color: rgb( 245, 57, 61 );" title="Refer and Earn" href="<?php echo $url['referandearn']; ?>" class="nav-link">
                                 Refer and Earn
                                 </a>
                              </li>
                              <li   class="nav-item m-1 brk ">
                                 |
                              </li>
                              <li class=" nav-item">
                                 <a title="Balance" href="#" class="nav-link">
                                <img src="../assets/img/Balance.png" width="25px">  Balance <i class='fas fa-coins'></i> <?php echo $post["all_data"][0]->recharge_wallet;?>.00
                                 </a>
                              </li>
                              <li class=" nav-item">
                                 <a title="Balance" href="#" class="nav-link">
                                <img src="../assets/img/Balance.png" width="25px">  Level : <?php echo $level[0];?>
                                 </a>
                              </li>
                              <li   class="  nav-item m-1 brk ">
                                 |
                              </li>
                              <li class="mx-2 nav-item">
                                 <div class="dropdown user-flag">
                                    <img style=" margin-top: .3rem;" src="../assets/img/flag.png" width="30px" class=" dropbtn" >
                                    <span class="caret"></span>
                                    <div class="dropdown-content">
                                       <a class="dropdown-item" href="#">India</a>
                                       <a class="dropdown-item" href="#">Nepal</a>
                                    </div>
                                 </div>
                              </li>
                              <li   class="  nav-item m-1 brk ">
                                 |
                              </li>
                              <li class="nav-item">
                                 <div class="dropdown user-fa">
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
      