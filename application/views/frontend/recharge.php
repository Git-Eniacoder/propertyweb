
<!-- Recharge Section -->
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
                <form method="post" action="<?php echo $url['buyplan']; ?>">
                <?php if($status){ ?>
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key=<?php echo $id;?> 
                    data-amount=<?php echo $order->amount;?> 
                    data-currency="INR"
                    data-order_id=<?php echo $order->id;?>	
                    data-buttontext="Pay with Razorpay"
                    data-name="Acme Corp"
                    data-description="Test transaction"
                    data-image="https://example.com/your_logo.jpg"
                    data-prefill.name="Gaurav Kumar"
                    data-prefill.email="gaurav.kumar@example.com"
                    data-prefill.contact="9999999999"
                    data-theme.color="#F37254"
                    ></script>
                  <input type="hidden" value="recharge_wallet" name="wallet">
                  <input type="hidden" value="<?php echo $post['all_data'][0]->recharge_wallet; ?>" name="balance">
                  <?php } else{?>
                    <button data-toggle="modal" data-target="#login">Recharge Rs. 960</button>
                  <?php } ?>
                </form>
                
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
</main>
<!-- end Of recharge -->