<!DOCTYPE html>
<html lang="en">
    <head>
        <title >Tirupati Insurance</title>
    
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
    <header class="head">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                  <div class="logo">
                    <a class="custom-logo-link " rel="home" href="#">
                      <img width="133" height="55" src="assets/img/headlogo.svg" alt="Logo" class="custom-logo" >
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
                          <a class="dropdown-item" href="#">Rented</a>
                          <a class="dropdown-item" href="#">Sell</a>
                          <a class="dropdown-item" href="#">Buy</a>
                        </div>
                      </li>
                      
                      
                      <li   class="  nav-item">
                        <a title="Recharge" href="recharge" class="nav-link">
                          Recharge
                        </a>
                      </li>
                      <li   class="  nav-item">
                        <a title="Recharge" href="wallet" class="nav-link">
                          wallet
                        </a>
                      </li>
                      <li   class="  nav-item">
                        <a title="Refer & earn" href="#" class="nav-link">
                          Refer & earn
                        </a>
                      </li>
                      
                      
                      <li   class="  nav-item">
                        <button  >Register/Login</button>
                        
                      </li>
                    </ul>
                  </div>
                </nav> <!-- navbar -->
              </div>
            </div> <!-- row -->
          </div> <!-- container -->
        </header>

        <div class="wallet-main">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8">
                        <div class="wallet-head">
                            <h3>My Wallet</h3>
                            <hr class="style1">
                        </div>
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Recharge</button>
                            <button class="tablinks" onclick="openCity(event, 'Paris')">Refferal</button>
                            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Field</button>
                        </div>

                        <div id="London" class="tabcontent">
                            <p>Total Balance</p>
                            <input type="number" placeholder="14000" name="ttpp" disabled>
                            <button>ADD money</button>
                            <div class="wallet-content">
                                <p>Recharge Wallet Balance</p>
                                <img class="re" src="assets/img/Group 45.svg" ><input type="number" placeholder="14000" name="ttpp" disabled> Points
                                <h3>Recharges</h3>
                                <hr class="style1">
                                <div class="row ">
                                    <div class="col-md-3">
                                        <center><img src="assets/img/Group 45.svg" width="60px"></center>
                                        <p class="cc">Mobile Recharge</p>
                                    </div>
                                    <div class="col-md-3">
                                        <center><img src="assets/img/Group 45.svg" width="60px"></center>
                                        <p class="cc">DTH Recharge</p>
                                    </div>
                                    <div class="col-md-3">
                                        <center><img src="assets/img/Group 45.svg" width="60px"></center>
                                        <p class="cc">Data Card Recharge</p>
                                    </div>
                                </div>
                                <div class="wallet-history">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Transaction</th>
                                                <th>Ammount</th>
                                                <th>Status</th>
                                                <th>comment</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="assets/img/Group 45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Recharge 250</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                <td> -</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/img/Group 45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Recharge 250</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                <td> -</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/img/Group 45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Recharge 250</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                <td> -</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>    
                                
                                
                            </div>         

                            
                        </div>

                        <div id="Paris" class="tabcontent">
                            <h5>Refer your friend and earn point</h5>
                            
                            <div class="wallet-content">
                                <p>Refferal Wallet Balance</p>
                                <img class="re" src="assets/img/Group 45.svg" ><input type="number" placeholder="14000" name="ttpp" disabled> Points
                                <p>Refferal Link</p>
                                <h6>www.yoursite.com/refer/adfrd</h6>
                                <h3>Share with friends</h3>
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                
                                <div class="wallet-history">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Referals</th>
                                                <th>Ammount</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="assets/img/Group 45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                              
                                            </tr>
                                            <tr>
                                                <td><img src="assets/img/Group 45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><img src="assets/img/Group 45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>    
                                
                                
                            </div> 
                            
                        </div>

                        <div id="Tokyo" class="tabcontent">
                            <h5>Refer your friend and earn point</h5>
                        
                            
                            <div class="wallet-content">
                                <p>Feild Wallet Balance</p>

                                <img class="re" src="assets/img/Group 45.svg" ><input type="number" placeholder="14000" name="ttpp" disabled> Points <span style="color: #FF5757; margin-left:1rem; font-size:1.3rem;"> Level 1</span></br>
                                <div class="level">
                                <img src="assets/img/Group 45.svg" width="20px"><span style="color: grey; margin-left:2px;">After Refering 6 members sucessfully you will be on</span> <span style="margin-left: 5px;;">Level 2</sapn></br>
                                <img src="assets/img/Group 45.svg" width="20px"><span style="color: grey; margin-left:2px;">After Refering 36 members sucessfully you will be on</span> <span style="margin-left: 5px;;">Level 3</sapn></br>
                                <img src="assets/img/Group 45.svg" width="20px"><span style="color: grey; margin-left:2px;">After Refering 6 members sucessfully you will be on</span> <span style="margin-left: 5px;;">Level 4</sapn></br>
                                <img src="assets/img/Group 45.svg" width="20px"><span style="color: grey; margin-left:2px;">After Refering 6 members sucessfully you will be on</span> <span style="margin-left: 5px;;">Level 5</sapn></br>
                                <img src="assets/img/Group 45.svg" width="20px"><span style="color: grey; margin-left:2px;">After Refering 6 members sucessfully you will be on</span> <span style="margin-left: 5px;;">Level 6</sapn></br>
                                </div>
                                <h3>Share with friends</h3>
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <div class="wallet-history">
                                <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Referals</th>
                                                <th>Ammount</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="assets/img/Group 45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                              
                                            </tr>
                                            <tr>
                                                <td><img src="assets/img/Group 45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><img src="assets/img/Group 45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>    
                                
                                
                            </div> 
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="container">
                            <div class="card">
                                <h5>what is recharge wallet ?</h5>
                                <p>hegy djfgdfd hfbd fhdgvfd fd yfd hfvdf gv</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





      <div class="shadow-lg foot">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <h5>Links</h5>
            <hr class="style1">
            
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <h5>products</h5>
            <hr class="style1">
            <div class="links">
              <a href="#">Link1</a></br>
              <a href="#">Link2</a></br>
              <a href="#">Link3</a></br>
              <a href="#">Link4</a></br>
              <a href="#">Link5</a></br>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <h5>quick links</h5>
            <hr class="style1">
            <div class="links">
              
              <a href="#">blog</a></br>
              <a href="#">privacy</a></br>
              <a href="#">terms and condition</a></br>
              <a href="#">code of coduct</a></br>
              <a href="#">agent panel</a></br>
              <a href="#">site map</a></br>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <h5>get in touch</h5>
            <hr class="style1">
            <input type="email" name="email" placeholder="Email here..." >
            <span class="arrow"><img src="assest/img/arrow.svg" width="100%"></span>
            <p>Rajmahal Complex,Opp-PLA Petrol Pump,Delhi Road, Hisar-125001</p>
            <p><i class="fa fa-phone" style="margin-right: 7px; font-size: 20px;"></i> 8950000000</p>
            <p><i class="fa fa-envelope" style="margin-right: 7px; font-size: 20px;"></i> info@tirupatiinsurance.com</p>
          </div>
        </div>
      </div>    
    </div> 
    <section class="last"> 
      <div class="container">
        <p>follow us on</p>
       
          
            <div class="text-center">
            
						
              
                      <a href="#" target="_blank"> <i class="fa fa-youtube "></i></a>
						
                      <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
					
                      <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
						
                      <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
					
                      <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
						
                      <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
            </div>

        <p class="reserved">@2020  All Rights Reserved. Developed By <span><a href="#" class="lik">Eniacoder</a></span></p>
      </div>
    </section>  
    
    <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
    </body>

</html>