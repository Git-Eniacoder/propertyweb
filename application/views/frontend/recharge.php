<?php
  if(isset($_GET["id"]))
  {
    $refer_id=$_GET["id"];
    setcookie('referid',$_GET["id"],time() + (86400 * 30), "/");
  }
  else if(isset($_COOKIE['referid'])){
    $refer_id=$_COOKIE['referid'];
  }
  else
  {
    $refer_id=NULL;
    echo $refer_id;
   
  }
?>
<!-- Recharge Section -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>

.pay-header{
  background : #fff !important;
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
</style>

<?php 
  require_once(APPPATH.'libraries/razorpay-php/Razorpay.php');
  use Razorpay\Api\Api;
  $id='rzp_test_ZDu7FphXqoq9vd';
  $key='xCHB8eYRtg2hoXn8fCHN7yMC';
  $api=new Api($id,$key);
  $order=$api->order->create(array(
  'receipt'=>12323,
  'amount'=>90000,
  'payment_capture'=>1,
  'currency'=>'INR',)
  );
?>
<main class="main">
<div class="recharge-main">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ">
        <div class="form-head">
          <h3>Recharge</h3>
          <hr class="style1">
        </div>
        <div class="plans">
          <h6>Plans</h6>

          <div>
            <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
          </div>

          <div class="row justify-content-start price-card">
            <div class="col-md-4 lft">
              <div class="card price-card">
                <h5>Lorem Ipsum</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industr. Lorem</p>
                <?php if($status){ ?>
                  <form method="post" action="<?php echo $url['buyplan']; ?>">
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key=<?php echo $id;?> 
                    data-amount=<?php echo $order->amount;?> 
                    data-currency="INR"
                    data-order_id=<?php echo $order->id;?>	
                    data-buttontext="Pay &#x20B9;960"
                    data-name="<?php echo $site['site_title'] ;?>"
                    data-description="fjhejfeh"
                    data-image="<?php echo $url['image'].'logo/'.$site['site_logo'] ?>"
                    data-prefill.name="<?php echo $uname ?>"
                    data-prefill.contact="<?php echo $post['all_data'][0]->mobileno; ?>"
                    data-prefill.email="ijkdijkfd@gmail.com"
                    data-theme.color="#F37254"
                    ></script>
                  <input type="hidden" value="recharge_wallet" name="wallet">
                  <input type="hidden" value="<?php echo $post['all_data'][0]->recharge_wallet; ?>" name="balance">
                  <input type="hidden" value="<?php echo $refer_id; ?>" name="refer_id">
                </form>
                  <?php } else{?>
                    <button data-toggle="modal" data-target="#login">Recharge Rs. 960</button>
                  <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 rgt">
        <div class="card">
          <h6>How we solve your problem</h6>
          <p>Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="card">
          <h6>How we solve your problem</h6>
          <p>Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="payment" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header pay-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
        </div>
        				
				<h4 class="modal-title w-100">Payment Successfull!</h4>	
			</div>
			<div class="modal-body">
      <h5 class="modal-title w-100 text-center"><i class='fas fa-coins'></i> 1200 Points Added</h5>
				<p class="text-center">Your order has been placed. Go to wallet to check your points</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>     
<?php
if($this->session->flashdata('success')){
echo "<script>$('#payment').modal('show');</script>";
}
?>
</main>
<!-- end Of recharge -->
