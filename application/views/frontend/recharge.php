<!-- Recharge Section -->
<!-- <?php print_r($post['all_data']->recharge_wallet) ?> -->
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
                  <input type="hidden" value="recharge_wallet" name="wallet">
                  <input type="hidden" value="<?php echo $post['all_data'][0]->recharge_wallet;?>" name="balance">
                  <button type="submit">Recharge Rs. 960</button>
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



<!-- end Of recharge -->