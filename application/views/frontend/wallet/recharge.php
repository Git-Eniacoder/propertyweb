<style>
/* modal  */
.nav{
   height: 6rem;
}
.modal-confirm {		
	color: #636363;
	width: 325px;
	font-size: 14px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #82ce34;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #82ce34;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #6fb32b;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}

/* end modal  */
   .fa-user{
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

<!-- <div id="rechargeModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
      
      <div class="modal-content">
         <div class="modal-body text-center">
            <img width="80" src="<?php echo base_url() . 'assets/img/loading.gif' ?>" alt="" srcset="">
         </div>
      </div>

   </div>
</div> -->


<!-- <div class="wallet-op">
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <center><span style="color: white;"> &#x20B9;<?php echo $post["all_data"][0]->recharge_wallet; ?></span></center>
            <a href="<?php echo $url['wallet']; ?>"><button class="active"><img class="mx-2" src="../assets/img/recharge_wallet.svg" width="25px">Recharge wallet</button></a>
         </div>
         <div class="col-md-3">
            <center><span style="color: white;">&#x20B9;<?php echo $post["all_data"][0]->refferal_wallet; ?></span></center>
            <a href="<?php echo $url['refer-wallet']; ?>"><button><img class="mx-2" src="../assets/img/refer.svg" width="25px">Refer & Earn wallet</button></a>
         </div>
         <div class="col-md-3">
            <center><span style="color: white;"> &#x20B9;<?php echo $post["all_data"][0]->filed_wallet; ?></span></center>
            <a href="<?php echo $url['field-wallet']; ?>"><button><img class="mx-2" src="../assets/img/Field Expense.png" width="25px">Field Expenses</button></a>
         </div>
         <div class="col-md-3">
            <center><img src="../assets/img/Add-Money.svg" width="25px"></center>
            <a href="addmoney"><button>Add Money</button></a>
         </div>
      </div>
   </div>
</div> -->

<div class="wallet-op">
      <div class="container">
         <div class="row wallet_options justify-content-center">
            <div class="col-md-3 wallet_op_bx">
               <center><span class="wallet_amt" style="color: white; margin-top:5px;"> &#x20B9;<?php echo $post["all_data"][0]->recharge_wallet; ?></span></center>
               <a href="<?php echo $url['wallet']; ?>"><button class="wallet_op_btn active"><img class="mx-2 wallet_mob_img" src="../assets/img/recharge_wallet.svg" width="25px">Recharge wallet</button></a>
            </div>
            <div class="col-md-3 wallet_op_bx">
               <center><span class="wallet_amt" style="color: white;">&#x20B9;<?php echo $post["all_data"][0]->refferal_wallet; ?></span></center>
               <a href="<?php echo $url['refer-wallet']; ?>"><button  class="wallet_op_btn"><img class="mx-2 wallet_mob_img" src="../assets/img/refer.svg" width="25px">Refer & Earn wallet</button></a>
            </div>
            <div class="col-md-3 wallet_op_bx">
               <center><span class="wallet_amt" style="color: white;"> &#x20B9;<?php echo $post["all_data"][0]->filed_wallet; ?></span></center>
               <a href="<?php echo $url['field-wallet']; ?>"><button class="wallet_op_btn"><img class="mx-2 wallet_mob_img" src="../assets/img/Field Expense.png" width="25px">Field Expenses</button></a>
            </div>

            <div class="col-md-3 wallet_op_bx wallet_op_bx-money">
               <center><img src="../assets/img/Add-Money.svg" width="25px" class="wallet_mob_img"></center>
               <a href="addmoney"><button class="wallet_op_btn">Add Money</button ></a>
            </div>
         </div>
      </div>
   </div>




<div class="recha">
   <div class="container p-3">
      <div class="row">
         <div class="col-md-6">
            <div class="card" style="margin-bottom:4rem ;">
               <h4>Recharge & PayBills</h4>
               <hr class="style1">
               <div class="dex">
                  <div class="row">
                     <div class="col-md-8">
                        <ul class=" row nav nav-pills " id="pills-tab" role="tablist">
                           <li class="col-md-4 nav-item">
                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><img class="ima rea" src="../assets/img/smartphoneicon.svg" alt="Mobile" style="width: 3rem; height: 3rem;">
                                 Mobile </a>
                           </li>
                           <li class="col-md-4 nav-item">
                              <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><img class="ima" src="../assets/img/DTHicon_1.svg" alt="Dth" style="width: 3rem; height: 3rem;">
                                 DTH </a>
                           </li>
                           <li class="col-md-4 nav-item">
                              <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><img class="ima " src="../assets/img/datacardicon.svg" alt="Datacard" style="width: 3rem; height: 3rem;">
                                 DataCard</a>
                           </li>
                        </ul>
                     </div>
                     
                  </div>
               </div>
               <div class="scrolling-wrapper">
                  <ul class=" row nav nav-pills " id="pills-tab" role="tablist">
                     <li class="card nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                           <img class="ima rea" src="../assets/img/smartphoneicon.svg" alt="Mobile">
                           <p>Mobile</p>
                        </a>
                     </li>
                     <li class="card nav-item">
                        <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                           <img class="ima" src="../assets/img/DTHicon_1.svg" alt="Dth">
                           <p>DTH</p>
                        </a>
                     </li>
                     <li class="card nav-item">
                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                           <img class="ima " src="../assets/img/datacardicon.svg" alt="Datacard">
                           <p>DataCard</p>
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                     <div class="radi">
                        <form id="dth" action="<?php echo $url['wallet']; ?>/mobile" method="post">
                           <label style="margin-right:1rem;"><input type="radio" value="prepaid" name="optradio" checked> Prepaid</label>
                           <label><input type="radio" name="optradio" value="postpaid"> Postpaid</label>
                     </div>
                     <div class="inp">
                        <div class="row top">
                           <div class="col-md-6">
                              <div class="input-group" style="margin-bottom: 1rem;">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text">+91</span>
                                 </div>
                                 <input type="number" name="number" class="form-control" placeholder="Mobile Number">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <select name="company" class="sel">
                                 <option selected disabled value="">Select Company</option>
                                 <option value="AO">Airtel</option>
                                 <option value="B">BSNL</option>
                                 <option value="ID">Idea</option>
                                 <option value="JO">Jio</option>
                                 <option value="VF">Vodafone</option>
                              </select>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <select name="circle" class="sel" style="margin-bottom: 1rem;">
                                 <option selected disabled value="">Select circle</option>
                                 <option value="Andhra Pradesh">Andhra Pradesh</option>
                                 <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                 <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                 <option value="Assam">Assam</option>
                                 <option value="Bihar">Bihar</option>
                                 <option value="Chandigarh">Chandigarh</option>
                                 <option value="Chhattisgarh">Chhattisgarh</option>
                                 <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                 <option value="Daman and Diu">Daman and Diu</option>
                                 <option value="Delhi">Delhi</option>
                                 <option value="Lakshadweep">Lakshadweep</option>
                                 <option value="Puducherry">Puducherry</option>
                                 <option value="Goa">Goa</option>
                                 <option value="Gujarat">Gujarat</option>
                                 <option value="Haryana">Haryana</option>
                                 <option value="Himachal Pradesh">Himachal Pradesh</option>
                                 <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                 <option value="Jharkhand">Jharkhand</option>
                                 <option value="Karnataka">Karnataka</option>
                                 <option value="Kerala">Kerala</option>
                                 <option value="Madhya Pradesh">Madhya Pradesh</option>
                                 <option value="Maharashtra">Maharashtra</option>
                                 <option value="Manipur">Manipur</option>
                                 <option value="Meghalaya">Meghalaya</option>
                                 <option value="Mizoram">Mizoram</option>
                                 <option value="Nagaland">Nagaland</option>
                                 <option value="Odisha">Odisha</option>
                                 <option value="Punjab">Punjab</option>
                                 <option value="Rajasthan">Rajasthan</option>
                                 <option value="Sikkim">Sikkim</option>
                                 <option value="Tamil Nadu">Tamil Nadu</option>
                                 <option value="Telangana">Telangana</option>
                                 <option value="Tripura">Tripura</option>
                                 <option value="Uttar Pradesh">Uttar Pradesh</option>
                                 <option value="Uttarakhand">Uttarakhand</option>
                                 <option value="West Bengal">West Bengal</option>
                              </select>
                           </div>
                           <div class="col-md-6">
                              <div class="input-group" style=" border-color:grey;">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><img src="../assets/img/rupee.svg" width="10px"></span>
                                 </div>
                                 <input type="number" name="amt" class="form-control" placeholder="Amount">
                                 <!-- <input type="button" data-target="#view-plans" data-toggle="modal" value="Browse plan"> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="re-bu">
                        <div class="row">
                           <div class="col-md-6">
                              <button>Recharge Now</button>
                           </div>
                           </form>
                           <div class="col-md-6">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                     <div class="row">
                        <div class="col-md-6">
                           <form id="dth" action="<?php echo $url['wallet']; ?>/mobile/1" method="post">
                              <div class="inp">
                                 <select name="company" class="sel">
                                    <option selected disabled value="">Select operator</option>
                                    <option value="AT">AIRTEL DIGITAL TV</option>
                                    <option value="DT">DISH TV</option>
                                    <option value="RT">RELIANCE DIGITAL TV</option>
                                    <option value="ST">SUN DIRECT</option>
                                    <option value="TT">TATA SKY B 2 B</option>
                                    <option value="VT">VIDEOCON D2H</option>
                                 </select>
                              </div>
                        </div>
                        <div class="col-md-6">
                           <div class="tt">
                              <input name="number" type="text" placeholder="Subscriber id">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="inp">
                              <div class="input-group" style=" margin-top:-1rem; border-color:grey;">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><img src="../assets/img/rupee.svg" width="10px"></span>
                                 </div>
                                 <input type="number" name="amt" class="form-control" placeholder="Amount">
                              </div>
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
                           </form>
                           <div class="col-md-6">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="radi">
                        <form id="datacard" action="<?php echo $url['wallet']; ?>/mobile" method="post">
                           <label style="margin-right:1rem;"><input type="radio" value="prepaid" name="optradio" checked> Prepaid</label>
                           <label><input type="radio" name="optradio" value="postpaid"> Postpaid</label>
                     </div>
                     <div class="inp">
                        <div class="row top">
                           <div class="col-md-6">
                              <div class="input-group" style="margin-bottom: 1rem;">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text">+91</span>
                                 </div>
                                 <input type="number" name="number" class="form-control" placeholder="Mobile Number">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <select name="company" class="sel">
                                 <option selected disabled value="">Select Company</option>
                                 <option value="AO">Airtel</option>
                                 <option value="B">BSNL</option>
                                 <option value="ID">Idea</option>
                                 <option value="JO">Jio</option>
                                 <option value="VF">Vodafone</option>
                              </select>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <select name="circle" class="sel" style="margin-bottom: 1rem;">
                                 <option selected disabled value="">Select circle</option>
                                 <option value="Andhra Pradesh">Andhra Pradesh</option>
                                 <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                 <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                 <option value="Assam">Assam</option>
                                 <option value="Bihar">Bihar</option>
                                 <option value="Chandigarh">Chandigarh</option>
                                 <option value="Chhattisgarh">Chhattisgarh</option>
                                 <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                 <option value="Daman and Diu">Daman and Diu</option>
                                 <option value="Delhi">Delhi</option>
                                 <option value="Lakshadweep">Lakshadweep</option>
                                 <option value="Puducherry">Puducherry</option>
                                 <option value="Goa">Goa</option>
                                 <option value="Gujarat">Gujarat</option>
                                 <option value="Haryana">Haryana</option>
                                 <option value="Himachal Pradesh">Himachal Pradesh</option>
                                 <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                 <option value="Jharkhand">Jharkhand</option>
                                 <option value="Karnataka">Karnataka</option>
                                 <option value="Kerala">Kerala</option>
                                 <option value="Madhya Pradesh">Madhya Pradesh</option>
                                 <option value="Maharashtra">Maharashtra</option>
                                 <option value="Manipur">Manipur</option>
                                 <option value="Meghalaya">Meghalaya</option>
                                 <option value="Mizoram">Mizoram</option>
                                 <option value="Nagaland">Nagaland</option>
                                 <option value="Odisha">Odisha</option>
                                 <option value="Punjab">Punjab</option>
                                 <option value="Rajasthan">Rajasthan</option>
                                 <option value="Sikkim">Sikkim</option>
                                 <option value="Tamil Nadu">Tamil Nadu</option>
                                 <option value="Telangana">Telangana</option>
                                 <option value="Tripura">Tripura</option>
                                 <option value="Uttar Pradesh">Uttar Pradesh</option>
                                 <option value="Uttarakhand">Uttarakhand</option>
                                 <option value="West Bengal">West Bengal</option>
                              </select>
                           </div>
                           <div class="col-md-6">
                              <div class="input-group" style=" border-color:grey;">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><img src="../assets/img/rupee.svg" width="10px"></span>
                                 </div>
                                 <input type="number" name="amt" class="form-control" placeholder="Amount">
                                 <!-- <input type="button" data-target="#view-plans" data-toggle="modal" value="Browse plan"> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="re-bu">
                        <div class="row">
                           <div class="col-md-6">
                              <button>Recharge Now</button>
                           </div>
                           </form>
                           <div class="col-md-6">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
               <div class="container bg-white table-responsive ">
            <table class="table table-fluid" id="myTable">
         <thead>
               <tr class="bg-white">
                  <th>Transaction Id</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Date</th>
               </tr>
         </thead>
     <tbody>
               <?php foreach($history as $value) { ?>
               <tr>
                  <td><?php echo $value['trans_id'] ?></td>
                  <td>-<?php echo $value['recharge_amount'] ?></td>
                  <?php if($value['recharge_status'] == 'Failed'){ ?>
                  <td class="text-danger"><?php echo $value['recharge_status'] ?></td>
                  <?php }else if($value['recharge_status'] == 'Request Accepted'){ ?>
                     <td class="text-warning"><?php echo $value['recharge_status'] ?></td>
                  <?php }else if($value['recharge_status'] == 'Success'){ ?>
                     <td class="text-success"><?php echo $value['recharge_status'] ?></td>
                  <?php } ?>
                  <td><?php echo $value['recharge_date'] ?></td>
               </tr>
               <?php } ?>
     </tbody>
     </table>
     </div>
         </div>
      </div>
   </div>
</div>
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div id="ico" class="icon-box jq">
            
				</div>				
				<h4 id="he" class="modal-title w-100"></h4>	
			</div>
			<div class="modal-body">
				<p id="rec" class="text-center"></p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block jq" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div> 

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
// $('#myModal').modal('show');
$("#recharge,#datacard,#dth").submit(function(event){
event.preventDefault();
var post_url = $(this).attr("action"); 
var request_method = $(this).attr("method"); 
var form_data = $(this).serialize(); 
console.log(form_data)  
$('#rechargeModal').modal('show')  
$('.modal-backdrop').show();
$.ajax({
    url : post_url,
    type: request_method,
    dataType:"json",
    data : form_data, 
}).done(function(response){ 
   $('.modal').modal('hide');
      $('.modal-backdrop').hide();
    if(response.failed){
       $('.jq').css("background-color", "red");
      $('#myModal').modal('show');
      $('#rec').html(response.msg);
      $('#ico').html(response.ico);
      $('#he').html(response.he);
    }
    
    else if(response.success){
       $('.jq').css("background-color", "#82ce34");
      $('#myModal').modal('show');
      $('#rec').html(response.msg);
      $('#ico').html(response.ico);
      $('#he').html(response.he);
    }
    else if(response.pending){
       $('.jq').css("background-color", "#ffc107");
      $('#myModal').modal('show');
      $('#rec').html(response.msg);
      $('#ico').html(response.ico);
      $('#he').html(response.he);
    }
   
    
});
});
</script>

<script>
     $(document).ready( function () {
     $('#myTable').DataTable({
      "bLengthChange": false,
    "bFilter": false,
    "bInfo": false,
    "pagingType": "simple",
    "pageLength": 5,
     });
 } );
     </script>






<?php if($post["all_data"][0]->level_up==1){ ?>
   <div class="modal" id="update">
    <div class="modal-dialog">
      <div class="modal-content">
      <!-- Modal Header -->
        <div class="modal-header text-center">
          <h2 class="modal-title text-green">Notification</h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <p>Level Up to <?php echo $level[0]; ?></p>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="<?php echo base_url() ;?>/wallet/recharge/unset_notification?var1=<?php echo $post["all_data"][0]->id; ?>"><button type="button" class="btn btn-danger" >Close</button></a>
        </div>
        
      </div>
    </div>
  </div>

  <script>
        $('#update').modal('show');
</script>
  
<?php } ?>