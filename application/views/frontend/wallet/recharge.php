<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->





<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


<div class="wallet">

<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <div id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">pro sidebar</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      
      <!-- sidebar-header  -->
      
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          
          
          
          
         
          <li>
            <a href="#" class="tablinks" onclick="openCity(event, 'recharge')" id="defaultOpen">
                Recharges
            </a>
          </li>
          
          <li>
            <a href="#" class="tablinks" onclick="openCity(event, 'wallet')" >
                Wallets
            </a>
          </li>
          <li>
            <a href="#" class="tablinks" onclick="openCity(event, 'refer')" >
                Refer and earn
            </a>
          </li>
          <li>
            <a href="#" class="tablinks" onclick="openCity(event, 'history')">
                History
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    
</div>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
  <div id="recharge" class="tabcontent rechar">
    <button class="top"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:25px">Wallet 850</button>
    <button class="top2">Add money</button>
    <h5>Mobile Recharges</h5>
    <div class="rechar-box">
    <div class="tab">
        <div class="row ">
            <div class="col-md-1">
                <a href="#" class="tablink" onclick="opnCity(event, 'mobile')" id="defaultOpe"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:40px">Mobile Recharge</a>
            </div>
            <div class="col-md-1">
                <a href="#" class="tablink" onclick="opnCity(event, 'dth')"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:40px">DTH</a>
            </div>
            <div class="col-md-1">
                <a href="#" class="tablink" onclick="opnCity(event, 'data')"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:40px">Data</a>
            </div>
        </div>
            
            
            
    </div>
    <div id="mobile" class="tabcon">
        <div class="row justify-content-center">
            <div class="col-md-11">
            <div class="contentrr" >
            <div class="container">
                
            <div class="row justify-content-center">
                    <div class="col-md-3">
                        <input type="number" name="m_number" placeholder="Number" class="inpu">
                    </div>
                    <div class="col-md-3">
                        <input list="operater" name="operater" placeholder="enter operator" class="inpu">
                            <datalist id="operater">
                                <option value="idea">
                                <option value="vodafone">
                                <option value="airtel">
                                <option value="jio">
                                <option value="relience">
                            </datalist>
                    </div>
                    <div class="col-md-3">
                        <input list="state" name="state" placeholder="enter state" class="inpu">

                        <datalist id="state">
                            <option value="rajasthan">
                            <option value="hariyana">
                            <option value="delhi">
                            <option value="punjab">
                            <option value="up">
                        </datalist>
                    </div>
                </div>

                <!-- sidebar-header  -->

                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>

                        <li>
                            <a href="#" class="tablinks" onclick="openCity(event, 'recharge')" id="defaultOpen">
                                Recharges
                            </a>
                        </li>

                        <li>
                            <a href="#" class="tablinks" onclick="openCity(event, 'wallet')">
                                Wallets
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tablinks" onclick="openCity(event, 'refer')">
                                Refer and earn
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tablinks" onclick="openCity(event, 'history')">
                                History
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
        </div>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div id="recharge" class="tabcontent rechar">
                <button class="top"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:25px">Wallet 850</button>
                <button class="top2">Add money</button>
                <h5>Mobile Recharges</h5>
                <div class="rechar-box">
                    <div class="tab">
                        <div class="row ">
                            <div class="col-md-2">
                                <button class="tablink" onclick="opnCity(event, 'mobile')" id="defaultOpe"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:25px">Mobile</button>
                            </div>
                            <div class="col-md-2">
                                <button class="tablink" onclick="opnCity(event, 'dth')"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:25px">DTH</button>
                            </div>
                            <div class="col-md-2">
                                <button class="tablink" onclick="opnCity(event, 'data')"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:25px">Data</button>
                            </div>
                        </div>



                    </div>
                    <div id="mobile" class="tabcon">
                        <div class="row justify-content-center">
                            <div class="col-md-11">
                                <div class="contentrr">
                                    <div class="container">

                                        <div class="row justify-content-center">
                                            <div class="col-md-3">
                                                <label for="m_number">Mobile Number</label>
                                                <input type="number" name="m_number" placeholder=" Mobile Number" class="inpu">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="operater">Select operater</label>
                                                <input list="operater" name="operater" placeholder="Operator" class="inpu">
                                                <datalist id="operater">
                                                    <option value="idea">
                                                    <option value="vodafone">
                                                    <option value="airtel">
                                                    <option value="jio">
                                                    <option value="relience">
                                                </datalist>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="state">Select Circle</label>
                                                <input list="state" name="state" placeholder="Select Circle" class="inpu">

                                                <datalist id="state">
                                                    <option value="rajasthan">
                                                    <option value="hariyana">
                                                    <option value="delhi">
                                                    <option value="punjab">
                                                    <option value="up">
                                                </datalist>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="state">Select Amount</label>
                                                <input type="number" placeholder="Amount" class="inpu">
                                            </div>
                                        </div>
                                        <input type="checkbox"> Prepaid
                                        <input type="checkbox"> Postpaid</br>
                                        <button class="pay" data-toggle="modal" data-target="#myModal">Pay now</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="dth" class="tabcon">
                        <div class="row justify-content-center">
                            <div class="col-md-11">
                                <div class="contentrr">
                                    <div class="container">
                                        <div class="row justify-content-center">

                                            <div class="col-md-3">
                                                <label for="state">Select Operator</label>
                                                <input list="operater" name="operater" placeholder="Operator" class="inpu">
                                                <datalist id="operater">
                                                    <option value="idea">
                                                    <option value="vodafone">
                                                    <option value="airtel">
                                                    <option value="jio">
                                                    <option value="relience">
                                                </datalist>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="state">Mobile Number / Customer Id</label>
                                                <input type="number" name="m_number" placeholder="Mobile Number / Customer Id" class="inpu">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="state">Enter Amount</label>
                                                <input type="number" placeholder="Enter Ammount" class="inpu">
                                            </div>
                                        </div>

                                        <button class="pay">Pay now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="data" class="tabcon">
                        <div class="row justify-content-center">
                            <div class="col-md-11">
                                <div class="contentrr">
                                    <div class="container">

                                        <div class="row justify-content-center">
                                            <div class="col-md-3">
                                                <label for="state">Data Card Number</label>
                                                <input type="number" name="m_number" placeholder=" Data Card Number" class="inpu">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="state">Operator</label>
                                                <input list="operater" name="operater" placeholder="Enter Operator" class="inpu">
                                                <datalist id="operater">
                                                    <option value="idea">
                                                    <option value="vodafone">
                                                    <option value="airtel">
                                                    <option value="jio">
                                                    <option value="relience">
                                                </datalist>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="state">Select Circle</label>
                                                <input list="state" name="state" placeholder="Select Circle" class="inpu">

                                                <datalist id="state">
                                                    <option value="rajasthan">
                                                    <option value="hariyana">
                                                    <option value="delhi">
                                                    <option value="punjab">
                                                    <option value="up">
                                                </datalist>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="state">Amount</label>
                                                <input type="number" placeholder="Amount" class="inpu">
                                            </div>
                                        </div>
                                        <input type="checkbox"> Prepaid
                                        <input type="checkbox"> Postpaid</br>
                                        <button class="pay">Pay now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fqs">
                    <h6 class="fqs-head">How to payment with fast mode</h6>
                    <p>With money loaded in your wallet, it takes seconds to make phone and DTH recharges!</p>
                </div>

                <div class="fqs">
                    <h6 class="fqs-head">How to payment with fast mode</h6>
                    <p>With money loaded in your wallet, it takes seconds to make phone and DTH recharges!</p>
                </div>

                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">




                            <!-- Modal body -->
                            <div class="modal-body">
                                <h5>Confirm Recharge</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Mobile Number</p>
                                        <p>operator</p>
                                        <p>plan</p>
                                        <p>validity</p>
                                        <p>TalkTime</p>
                                        <p>Plan Discription</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>8463774215</p>
                                        <P>Idea | Rajasthan</P>
                                        <P>Special Offer</P>
                                        <P>2 days</P>
                                        <P>0</P>
                                        <P>Now get Truly Unlimited Local/National Calls to all Networks+200MB Data.</P>
                                    </div>
                                </div>
                                <button>Proceed</button>
                                <p>Coupon is Applied ! you will get 5 rupess cashback</p>
                                <a href="#">Apply coupon</a>
                            </div>



                        </div>
                    </div>
                </div>    
                    <input type="checkbox" > Prepaid
                    <input type="checkbox" > Postpaid</br>
                    <button class="pay">Pay now</button>
            </div>
        </div>
            </div>
        </div> 
    </div>
    </div> 
    <h6>How to payment with fast mode</h6>
    <p>With money loaded in your wallet, it takes seconds to make phone and DTH recharges!</p>
    <h6>How to payment with fast mode</h6>
    <p>With money loaded in your wallet, it takes seconds to make phone and DTH recharges!</p>

    <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        
       
        
        <!-- Modal body -->
        <div class="modal-body">
          <h5>Confirm Recharge</h5>
          <div class="row">
            <div class="col-md-6">
                <p>Mobile Number</p>
                <p>operator</p>
                <p>plan</p>
                <p>validity</p>
                <p>TalkTime</p>
                <p>Plan Discription</p>
            </div>
            <div class="col-md-6">
                <p>8463774215</p>
                <P>Idea | Rajasthan</P>
                <P>Special Offer</P>
                <P>2 days</P>
                <P>0</P>
                <P>Now get Truly Unlimited Local/National Calls to all Networks+200MB Data.</P>
            </div>
          </div>
          <button>Proceed</button>
          <p>Coupon is Applied ! you will get 5 rupess cashback</p>
          <a href="#" data-toggle="modal" data-target="#coupon">Apply coupon</a>
        </div>
        
        
        
      </div>
    </div>
  </div>
  <div class="modal fade" id="coupon">
    <div class="modal-dialog">
      <div class="modal-content">
      
        
       
        
        <!-- Modal body -->
        <div class="modal-body">
          <input class="coupon" type="text" placeholder="coupon code" name="coupon">
          <button>Apply</button>
          <ul>
            <li>First25</br> Get 20% off</li>
            <li>First25</br> Get 20% off</li>
            <li>First25</br> Get 20% off</li>
            </ul>
        </div>
        
        
        
      </div>
    </div>
  </div>
  </div>   
  <div id="wallet" class="tabcontent rechar">
  <div class="container-fluid">
        <button class="top"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:30px">Wallet 850</button>
        <button class="top2">Buy plan</button>
        <h5>Wallets</h5>
        <div class="rechar-box">
    <div class="tab">
        <div class="row ">
            <div class="col-md-2">
            <button class="tablin" onclick="onCity(event, 'London')" id="defautOpe"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:30px">Recharge</button>
            </div>
            <div class="col-md-2">
            <button class="tablin" onclick="onCity(event, 'Paris')"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:30px">Refferal</button>
                
            </div>
            <div class="col-md-2">
            <button class="tablin" onclick="onCity(event, 'Tokyo')"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:30px">Field</button>
            </div>
        </div>
            
            
            
    </div>
    <div id="London" class="tabco">
        <div class="row justify-content-center">
            <div class="col-md-11">
            <div class="contentrr" >
            <div class="container">
                <p>Total balance<p>
                <input type="number" placeholder="15000" disabled>
                <p>Recharge Wallet Available balance</p>
                <input type="number" placeholder="1500" disabled>
            </div>
        </div>
            </div>
        </div>
        
    </div>

            </div>
            <div id="wallet" class="tabcontent rechar">
                <div class="container-fluid">
                    <button class="top"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:30px">Wallet 850</button>
                    <button class="top2">Buy plan</button>
                    <h5>Wallets</h5>
                    <div class="rechar-box">
                        <div class="tab">
                            <div class="row ">
                                <div class="col-md-2">
                                    <button class="tablin" onclick="onCity(event, 'London')" id="defautOpe"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:30px">Recharge</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="tablin" onclick="onCity(event, 'Paris')"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:30px">Refferal</button>

                                </div>
                                <div class="col-md-2">
                                    <button class="tablin" onclick="onCity(event, 'Tokyo')"><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:30px">Field</button>
                                </div>
                            </div>



                        </div>
                        <div id="London" class="tabco">
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <div class="contentrr">
                                        <div class="container">
                                            <p>Total balance<p>
                                                    <input type="number" placeholder="15000" disabled>
                                                    <p>Recharge Wallet Available balance</p>
                                                    <input type="number" placeholder="1500" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="Paris" class="tabco">
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <div class="contentrr">
                                        <div class="container">
                                            <p>Total balance<p>
                                                    <input type="number" placeholder="15000" disabled>
                                                    <p>Refferal Wallet Available balance</p>
                                                    <input type="number" placeholder="150" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Tokyo" class="tabco">
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <div class="contentrr">
                                        <div class="container">
                                            <p>Total balance<p>
                                                    <input type="number" placeholder="15000" disabled>
                                                    <p>Feild Wallet Available balance</p>
                                                    <input type="number" placeholder="1400" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <h6>How to Recharge prepaid mobile online</h6>
                    <p>You can now carry out your prepaid online recharge and bill payments for any number, for your friends and family using MobiKwik. Online recharges can be done through Net Banking, Debit Card.</p>
                </div>
            </div>
            <div id="refer" class="tabcontent">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <h1>REFER AND EARN</h1>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo $url['image'] . 'refer.png'; ?>">
                        </div>
                    </div>
                    <p>When you refer a friend and invite them to sign up with, both you and your friend earn money by referral code. You earn Rs 100 SuperCash each, when your friend adds Rs 50 in their wallet. You can earn up to Rs 5,000 SuperCash through Refer and Earn. Now earn money by referring your friends to.</br>

                        How to refer and earn in two simple steps?
                        Make money with friends in just a few clicks. Refer a friend and earn money.</br>

                        Click on the Refer & Earn App Card</br>
                        Share via WhatsApp or any other medium</br>
                        Share your referral code and earn money by referring your friends now! Earn money endlessly!

                    </p>
                </div>
            </div>
            <div id="history" class="tabcontent">
                <div class="container-fluid">
                    <h4>History</h4>
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
                                <td><img src="<?php echo $url['image'] . 'redicon.png'; ?>" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                <td>-300</td>
                                <td>sucess</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo $url['image'] . 'redicon.png'; ?>" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                <td>-300</td>
                                <td>sucess</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo $url['image'] . 'redicon.png'; ?>" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                <td>-300</td>
                                <td>sucess</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo $url['image'] . 'redicon.png'; ?>" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                <td>-300</td>
                                <td>sucess</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>

                    <h4>How to Recharge prepaid mobile online</h4>
                    <p>You can now carry out your prepaid online recharge and bill payments for any number, for your friends and family using MobiKwik. Online recharges can be done through Net Banking, Debit Card.</p>

                </div>
            </div>
        </main>
        <!-- page-content" -->
    </div>
</div>
<!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    jQuery(function($) {

        $(".sidebar-dropdown > a").click(function() {
            $(".sidebar-submenu").slideUp(200);
            if (
                $(this)
                .parent()
                .hasClass("active")
            ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .parent()
                    .removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .next(".sidebar-submenu")
                    .slideDown(200);
                $(this)
                    .parent()
                    .addClass("active");
            }
        });

        $("#close-sidebar").click(function() {
            $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function() {
            $(".page-wrapper").addClass("toggled");
        });




    });





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

    function opnCity(ev, cityMe) {
        var j, tabcon, tablink;
        tabcon = document.getElementsByClassName("tabcon");
        for (j = 0; j < tabcon.length; j++) {
            tabcon[j].style.display = "none";
        }

        tablink = document.getElementsByClassName("tablink");
        for (j = 0; j < tablink.length; j++) {
            tablink[j].className = tablink[j].className.replace(" active", "");
        }

        document.getElementById(cityMe).style.display = "block";
        ev.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpe").click();

    function onCity(eve, cityM) {
        var j, tabco, tablin;
        tabco = document.getElementsByClassName("tabco");
        for (j = 0; j < tabco.length; j++) {
            tabco[j].style.display = "none";
        }

        tablin = document.getElementsByClassName("tablin");
        for (j = 0; j < tablin.length; j++) {
            tablin[j].className = tablin[j].className.replace(" active", "");
        }

        document.getElementById(cityM).style.display = "block";
        eve.currentTarget.className += " active";
    }
    document.getElementById("defautOpe").click();
</script>