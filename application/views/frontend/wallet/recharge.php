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
      </style>
   </head>
   <style>
   .fa-user{
    border: 2px solid gray;
    border-radius: 50%;
    padding: 4px 6px;
   }

   .user-fa{
       padding : 3px 0;
   }
   .user-flag{
       padding : 2px 0;
   }
   .caret{
    display: inline-block;
    width: 6px;
    height: 5px;
    background: url(https://www.oxigenwallet.com/public/images/tilt.png) no-repeat 0 0;
    margin-left: 0;
    vertical-align: middle;
    border: none;
   }
   </style>
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
                  <div class="item">Recharge & PayBills</div>
                  <div class="item">Send Money</div>
                  <div class="item">Prepaid Crads</div>
                  <div class="item">Shopping</div>
                  <div class="item">Add Money</div>
                  <hr class="style1">
                  <div class="item">Store Near You</div>
                  <hr class="style1">
                  <div class="item">Suppoprt</div>
                  <div class="item">About us</div>
                  <hr class="style1">
                  <div class="item">connect & share on</div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <nav class="navbar navbar-expand-lg">
                        <div class="logo lo-mm">
                           <a class="custom-logo-link " rel="<?php echo $url['home']; ?>" href="home">
                           <img width="133" height=30 src="<?php echo $url['image'] . 'logo/' . $site['site_logo'] ?>" alt="Logo" class="custom-logo">
                           </a>
                        </div>
                        <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
                           <ul id="nav" class="navbar-nav ml-auto ">
                              <li class=" nav-item">
                                 <a style="color: rgb( 245, 57, 61 );" title="Refer and Earn" href="#" class="nav-link">
                                 Refer and Earn
                                 </a>
                              </li>
                              <li   class="nav-item m-1 brk ">
                                 |
                              </li>
                              <li class=" nav-item">
                                 <a title="Balance" href="#" class="nav-link">
                                 Balance &#x20B9; 0.00
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
                                       <a class="dropdown-item" href="#">usa</a>
                                       <a class="dropdown-item" href="#">nepal</a>
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
                                       <a class="dropdown-item" href="#">login</a>
                                       <a class="dropdown-item" href="#">Register</a>
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
                  <center><span style="color: white;"> &#x20B9;0.00</span></center>
                  <button class="active">Recharge wallet</button>
               </div>
               <div class="col-md-3">
                  <center><span style="color: white;">&#x20B9;0.00</span></center>
                  <button>Refer & Earn wallet</button>
               </div>
               <div class="col-md-3">
                  <center><span style="color: white;"> &#x20B9;0.00</span></center>
                  <button>Field Expenses</button>
               </div>
               <div class="col-md-3">
                  <button>Add Money</button>
               </div>
            </div>
         </div>
      </div>
      <div class="recha">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="card">
                     <h4>Recharge & PayBills</h4>
                     <hr class="style1">
                     <div class="dex">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="tab row">
                                 <div class="col-md-4">
                                    <center><a href="#" class="tablinks"  onclick="openCity(event, 'London')"><img class="ima rea" src="../assets/img/phone.png" alt="Mobile" >
                                       Mobile  </a>  
                                    </center>
                                 </div>
                                 <div class="col-md-4">
                                    <center><a href="#" class="tablinks"  onclick="openCity(event, 'paris')"><img class="ima" src="../assets/img/landline.png" alt="landline" >
                                       Landline</a>
                                    </center>
                                 </div>
                                 <div class="col-md-4">
                                    <center><a href="#" class="tablinks"  onclick="openCity(event, 'tokyo')"><img class="ima" src="../assets/img/dth.png" alt="Dth" >
                                       DTH</a>
                                    </center>
                                 </div>
                                 
                                 <!-- Tab content -->
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="row tab">
                                 <div class="col-md-4">
                                    <center><a href="#" class="tablinks"  onclick="openCity(event, 'datacard')"><img class="ima " src="../assets/img/datacard.png" alt="Datacard" >
                                       Datacard  </a>
                                    </center>
                                 </div>
                                 <div class="col-md-4">
                                 </div>
                                 <div class="col-md-4">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="scrolling-wrapper">
                        <div class="card">
                           <center>
                              <a href="#" class="tablinks"  onclick="openCity(event, 'London')">
                                 <img class="ima rea" src="../assets/img/phone.png" alt="Mobile" >
                                 <p>Mobile</p>
                              </a>
                           </center>
                        </div>
                        <div class="card">
                           <center>
                              <a href="#" class="tablinks"  onclick="openCity(event, 'paris')">
                                 <img class="ima" src="../assets/img/landline.png" alt="landline" >
                                 <p>Landline</p>
                              </a>
                           </center>
                        </div>
                        <div class="card">
                           <center>
                              <a href="#" class="tablinks"  onclick="openCity(event, 'tokyo')">
                                 <img class="ima" src="../assets/img/dth.png" alt="Dth" >
                                 <p>DTH</p>
                              </a>
                           </center>
                        </div>
                        <div class="card">
                           <center>
                              <a href="#" class="tablinks"  onclick="openCity(event, 'datacard')">
                                 <img class="ima " src="../assets/img/datacard.png" alt="Datacard" >
                                 <p>Datacard</p>
                              </a>
                           </center>
                        </div>
                     </div>
                     <div id="London" class="tabcontent">
                        <div class="radi">
                           <label style="margin-right:1rem;"><input type="radio" name="optradio" checked> Prepaid</label>
                           <label><input type="radio" name="optradio" > Postpaid</label>
                        </div>
                        <div class="inp">
                           <div class="row top">
                              <div class="col-md-6">
                                 <div class="input-group" style="margin-bottom: 1rem;">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text">+91</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Mobile Number">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <select class="sel">
                                    <option value="volvo">select operator</option>
                                    <option value="saab">idea</option>
                                    <option value="opel">jio</option>
                                    <option value="audi">vodafone</option>
                                 </select>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <select class="sel" style="margin-bottom: 1rem;">
                                    <option value="volvo">select circle</option>
                                    <option value="saab">rajasthan </option>
                                    <option value="opel">hariyana</option>
                                    <option value="audi">delhi</option>
                                 </select>
                              </div>
                              <div class="col-md-6">
                                 <div class="input-group"  style=" border-color:grey;">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><img src="../assets/img/rupee.svg" width="10px"></span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Ammount">
                                    <input type="button" value="brwoser plan">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="re-bu">
                           <div class="row">
                              <div class="col-md-6">
                                 <button>Recharge Now</button>
                              </div>
                              <div class="col-md-6">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="paris" class="tabcontent">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="inp">
                                 <select class="sel">
                                    <option value="volvo">select operator</option>
                                    <option value="saab">Docomo</option>
                                    <option value="opel">Airtel</option>
                                    <option value="audi">BSNL</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                           </div>
                        </div>
                        <div class="re-bu">
                           <div class="row">
                              <div class="col-md-6">
                                 <button>Pay Now</button>
                              </div>
                              <div class="col-md-6">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="tokyo" class="tabcontent">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="inp">
                                 <select class="sel">
                                    <option value="volvo">select operator</option>
                                    <option value="saab">Airtel DTH</option>
                                    <option value="opel">Sun dth</option>
                                    <option value="audi">Videocon D2H</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                           </div>
                        </div>
                        <div class="re-bu">
                           <div class="row">
                              <div class="col-md-6">
                                 <button>Pay Now</button>
                              </div>
                              <div class="col-md-6">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="datacard" class="tabcontent">
                        <div class="radi">
                           <label><input type="radio" name="optradio" checked>Prepaid</label>
                           <label><input type="radio" name="optradio" >Postpaid</label>
                        </div>
                        <div class="inp">
                           <div class="row top">
                              <div class="col-md-6">
                                 <div class="input-group" style="margin-bottom: 1rem;">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text">+91</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Mobile Number">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <select class="sel">
                                    <option value="volvo">select operator</option>
                                    <option value="saab">idea</option>
                                    <option value="opel">jio</option>
                                    <option value="audi">vodafone</option>
                                 </select>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <select class="sel" style="margin-bottom: 1rem;">
                                    <option value="volvo">select circle</option>
                                    <option value="saab">rajasthan </option>
                                    <option value="opel">hariyana</option>
                                    <option value="audi">delhi</option>
                                 </select>
                              </div>
                              <div class="col-md-6">
                                 <div class="input-group"  style=" border-color:grey;">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text"><img src="../assets/img/rupee.svg" width="10px"></span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Ammount">
                                    <input type="button" value="brwoser plan">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="re-bu">
                           <div class="row">
                              <div class="col-md-6">
                                 <button>Recharge Now</button>
                              </div>
                              <div class="col-md-6">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
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
   <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-46156385-1', 'cssscript.com');
      ga('send', 'pageview');
      
      
      
      
      
      function openCity(evt, cityName) {
      // Declare all variables
      var i, tabcontent, tablinks;
      
      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
      }
      
      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      
      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
      }
      
   </script>
</html>