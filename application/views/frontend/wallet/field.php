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
            .refer-wallet{
                width: 100%;
                height: auto;
                padding-top: 3rem;
                padding-bottom: 3rem;
            }
            .refer-wallet .card{
                width: 100%;
                height: auto;
                padding-top: 1rem;
                border: 1px solid rgba(233, 227, 227, 0.836);
            }
            .refer-wallet .card h4{
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-weight: 500;
                text-align: center;
                color: rgb( 245, 57, 61 );
            }
            .refer-wallet .card button{
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
            .refer-wallet .card button:hover{
                border-bottom: 1px solid rgb( 245, 57, 61 );
                
            }
            .refer-wallet .card .his-table{
                width: 100%;
                height: auto;
                margin-top: 2rem;
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
                  <button ><img class="mx-2" src="../assets/img/recharge_wallet.svg" width="25px">Recharge wallet</button>
               </div>
               <div class="col-md-3">
                  <center><span style="color: white;">&#x20B9;<?php echo $post["all_data"][0]->refferal_wallet;?></span></center>
                  <button ><img class="mx-2" src="../assets/img/refer.svg" width="25px">Refer & Earn wallet</button>
               </div>
               <div class="col-md-3">
                  <center><span style="color: white;"> &#x20B9;<?php echo $post["all_data"][0]->filed_wallet;?></span></center>
                  <button class="active"><img class="mx-2" src="../assets/img/Field Expense.png" width="25px">Field Expenses</button>
               </div>

               <div class="col-md-3">
                   <center><img  src="../assets/img/Add-Money.svg" width="25px"></center>
                  <button>Add Money</button>
               </div>
            </div>
         </div>
      </div>
        <div class="refer-wallet">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <h4>Refer & Earn Wallet</h4>
                        
                        <button style="border-top: 1px solid rgba(233, 227, 227, 0.836);">Recharge & PayBills</button>
                        <button>Total Ammount</button>
                        <button>Transfered</button>
                        <button>Transfer to Bank</button>
                    </div>    
                </div>
                <div class="col-md-8">
                    <div class="card">
                    <h4 style="text-align: left; margin-left: 1rem;">History</h4>
                    <div class="his-table table-responsive">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Transaction</th>
                                <th>Ammount</th>
                                <th>Status</th>
                                <th>Comment</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>ID Refferal</td>
                                <td>+300</td>
                                <td>success</td>
                                <td>-</td>
                              </tr>
                              <tr>
                                <td>ID Refferal</td>
                                <td>+300</td>
                                <td>success</td>
                                <td>-</td>
                              </tr>
                              <tr>
                                <td>ID Refferal</td>
                                <td>+300</td>
                                <td>success</td>
                                <td>-</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>    
                </div>
                </div>
           </div> 
        </div> 
        </div>
   </body>  
            
</html>
