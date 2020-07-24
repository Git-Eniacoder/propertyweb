<html>
    <head>
        <title>Wallet Recharge</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo $url['stylecss']; ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <style>
            .add-money{
                width: 100%;
                height: auto;
                padding-top: 3rem;
                padding-bottom: 3rem;
            }
            .add-money .card{
                width: 100%;
                height: auto;
                padding-top: 1rem;
                border: 1px solid rgba(233, 227, 227, 0.836);
            }
            .add-money .card h4{
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-weight: 500;
                text-align: center;
                color: rgb( 245, 57, 61 );
            }
            .add-money .card button{
                width: 100%;
                height: auto;
                padding-top: .5rem;
                padding-bottom: .5rem;
                border-top: none;
                border-left: none;
                border-right: none;
                border-bottom: 1px solid rgba(233, 227, 227, 0.836);
                outline: none;
                background-color: white;
                color: grey;
                margin-top: 0px;
                transition: .5s;
            }
            .add-money .card button:hover{
                border-bottom: 1px solid rgb( 245, 57, 61 );
                
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
                  <div class="item"><i class="fa fa-mobile" aria-hidden="true"></i> Recharge & PayBills</div>
                  <div class="item">Buy Plan</div>
                  <div class="item"><img src="../assets/img/refer.svg" width="20px">Refer And Earn</div>
                  <div class="item"><img src="../assets/img/Field Expense.png" width="20px"> Field Expeses</div>
                  <div class="item"><img src="../assets/img/Add-Money.svg" width="20px">Add Money</div>
                  <hr class="style1">
                  
                  <a href="<?php echo $url['support']; ?>" class="item"><i class="fa fa-envelope" aria-hidden="true"></i> Suppoprt</a>
                  <div class="item">About us</div>
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
                                <img src="../assets/img/Balance.png" width="25px">  Balance &#x20B9; <?php echo $post["all_data"][0]->recharge_wallet;?>.00
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
      <div class="wallet-op">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <center><span style="color: white;"> &#x20B9;<?php echo $post["all_data"][0]->recharge_wallet;?></span></center>
                  <a href="recharge"><button ><img class="mx-2" src="../assets/img/recharge_wallet.svg" width="25px">Recharge wallet</button></a>
               </div>
               <div class="col-md-3">
                  <center><span style="color: white;">&#x20B9;<?php echo $post["all_data"][0]->refferal_wallet;?></span></center>
                  <a href="refer"><button ><img class="mx-2" src="../assets/img/refer.svg" width="25px">Refer & Earn wallet</button></a>
               </div>
               <div class="col-md-3">
                  <center><span style="color: white;"> &#x20B9;<?php echo $post["all_data"][0]->filed_wallet;?></span></center>
                  <a href="field"><button><img class="mx-2" src="../assets/img/Field Expense.png" width="25px">Field Expenses</button></a>
               </div>

               <div class="col-md-3">
                   <center><img  src="../assets/img/Add-Money.svg" width="25px"></center>
                  <a href="addmoney"><button class="active">Add Money</button></a>
               </div>
            </div>
         </div>
      </div>
      <div class="add-money">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        
                        
                       
                        <button>Buy plan 960</button>
                        
                    </div>    
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <h4 >Scan Qr code</h4>
                    <center><img width="200px;" src="https://cdn.britannica.com/17/155017-050-9AC96FC8/Example-QR-code.jpg" alt=""></center>
                    <div class="card-body py-0">
                        <h6 style="text-align: center;" class="text-primary">Or</h6>
                        <p style="text-align: center;" class="card-text">Pay Through UPI</p>
                        <h4 style="text-align: center;" class="card-title">7014162976@ybl</h4>
                    </div>
                        
                </div>
                </div>
                <div class="col-md-4">
                <div class="card m-3 p-3 text-secondary bg-white border-0">
                    <h4 class="" >Earn Big</h4> 
                  <center><div class="card-body py-0">
                    <h6 class="text-dark">Upto 1,00,000/month</h6>
                    <p class="card-text">Wondering How ?</p>
                    <h6 class="card-title"><a class="text-danger" href="">Click Here</a> for Details</h6>
                  </div></center>
                </div>
                </div>
           </div> 
        </div> 
        </div>  
   </body>  
   <script>
      var sidebarBox = document.querySelector('#box');
      var sidebarBtn = document.querySelector('#btn');
      var pageWrapper = document.querySelector('#main-content');
      
      sidebarBtn.addEventListener('click', function(event) {
      
              if (this.classList.contains('active')) {
                      this.classList.remove('active');
                      sidebarBox.classList.remove('active');
              } else {
                      this.classList.add('active');
                      sidebarBox.classList.add('active');
              }
      });
      
      pageWrapper.addEventListener('click', function(event) {
      
              if (sidebarBox.classList.contains('active')) {
                      sidebarBtn.classList.remove('active');
                      sidebarBox.classList.remove('active');
              }
      });
      
      window.addEventListener('keydown', function(event) {
      
              if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
                      sidebarBtn.classList.remove('active');
                      sidebarBox.classList.remove('active');
              }
      });
   </script>    
</html>
