<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 



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
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
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
  <div id="recharge" class="tabcontent">
    <button><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:30px">Wallet 850</button>
    <button>Add money</button>
    <h5>Mobile Recharges</h5>
    <div class="tab">
            <button class="tablink" onclick="opnCity(event, 'mobile')" id="defaultOpe">Mobile</button>
            <button class="tablink" onclick="opnCity(event, 'dth')">DTH</button>
            <button class="tablink" onclick="opnCity(event, 'data')">Data</button>
    </div>
    <div id="mobile" class="tabcon">
        <div class="contentrr" >
            <div class="container">
                
                <input type="number" name="m_number" placeholder="Number">
                
                <input list="operater" name="operater" placeholder="enter operator" >

                    <datalist id="operater">
                        <option value="idea">
                        <option value="vodafone">
                        <option value="airtel">
                        <option value="jio">
                        <option value="relience">
                    </datalist>
                    <input list="state" name="state" placeholder="enter state" >

                        <datalist id="state">
                            <option value="rajasthan">
                            <option value="hariyana">
                            <option value="delhi">
                            <option value="punjab">
                            <option value="up">
                        </datalist>
                    <input type="number" placeholder="enter ammount">    
                    <input type="checkbox" > Prepaid
                    <input type="checkbox" > Postpaid</br>
                    <button>Pay now</button>
            </div>
        </div>
    </div>

    <div id="dth" class="tabcon">
        <div class="contentrr" >
            <div class="container">
                
                <input type="number" name="m_number" placeholder="Number">
                
                <input list="operater" name="operater" placeholder="enter operator" >

                    <datalist id="operater">
                        <option value="idea">
                        <option value="vodafone">
                        <option value="airtel">
                        <option value="jio">
                        <option value="relience">
                    </datalist>
                    <input list="state" name="state" placeholder="enter state" >

                        <datalist id="state">
                            <option value="rajasthan">
                            <option value="hariyana">
                            <option value="delhi">
                            <option value="punjab">
                            <option value="up">
                        </datalist>
                    <input type="number" placeholder="enter ammount">    
                    <input type="checkbox" > Prepaid
                    <input type="checkbox" > Postpaid</br>
                    <button>Pay now</button>
            </div>
        </div>
    </div>
    <div id="data" class="tabcon">
        <div class="contentrr" >
            <div class="container">
                
                <input type="number" name="m_number" placeholder="Number">
                
                <input list="operater" name="operater" placeholder="enter operator" >

                    <datalist id="operater">
                        <option value="idea">
                        <option value="vodafone">
                        <option value="airtel">
                        <option value="jio">
                        <option value="relience">
                    </datalist>
                    <input list="state" name="state" placeholder="enter state" >

                        <datalist id="state">
                            <option value="rajasthan">
                            <option value="hariyana">
                            <option value="delhi">
                            <option value="punjab">
                            <option value="up">
                        </datalist>
                    <input type="number" placeholder="enter ammount">    
                    <input type="checkbox" > Prepaid
                    <input type="checkbox" > Postpaid</br>
                    <button data-toggle="modal" data-target="#myModal">Pay now</button>
                    <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
        </div>
            </div>
            
        
  </div>
    </div>
  <div id="wallet" class="tabcontent">
  <div class="container-fluid">
        <button><img src="<?php echo $url['image'] . 'wallet.png'; ?>" style="width:30px">Wallet 850</button>
        <button>Add money</button>
        <h5>Wallets</h5>
        <div class="tab">
            <button class="tablink" onclick="opnCity(event, 'London')" id="defaultOpe">Recharge</button>
            <button class="tablink" onclick="opnCity(event, 'Paris')">Refferal</button>
            <button class="tablink" onclick="opnCity(event, 'Tokyo')">Field</button>
        </div>
        <div id="London" class="tabcon">
            <div class="contentrr" >
                <div class="container">
                    <p>Recharge wallet Available balance</p>
                    <input type="number" disabled placeholder="156000"> <span>Points</span>
                </div>
            </div>
        </div>
        <div id="Paris" class="tabcon">
            <div class="contentrr" >
                <div class="container">
                    <p>Refferal wallet Available balance</p>
                    <input type="number" disabled placeholder="156000"> <span>Points</span>
                </div>
            </div>     
        </div>
        <div id="Tokyo" class="tabcon">
            <div class="contentrr" >
                <div class="container">
                    <p>Field wallet Available balance</p>
                    <input type="number" disabled placeholder="156000"> <span>Points</span>
                </div>
            </div>      
        </div>
        <h4>How to Recharge prepaid mobile online</h4>
        <p>You can now carry out your prepaid online recharge and bill payments for any number, for your friends and family using MobiKwik. Online recharges can be done through Net Banking, Debit Card.</p>
    </div>
  </div>
  <div id="refer" class="tabcontent">
    eretetev
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
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>
        jQuery(function ($) {

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
</script>   


