<style>
  .post-requirment input {
    padding: 0;
    margin: 0;
    outline-color: none;
    border: 1px solid #ced4da;
    outline-color: red;
    padding: .375rem .75rem;
  }

  #bhk {
    display: none;
  }

  #unit {
    display: none;
  }

  .post-card {
    border: none;
    background: none;
  }

  .post-card .card-body {
    color: #6c757d !important;
  }

  .post-card img {
    width: 3rem;
  }

  .response {
    text-align: center;
    color: red;
  }
</style>

<section class="" style="background-color: #fafafa;">
  <div class="py-5 container text-center">
    <h3 class="pt-5"><span class="text-danger">Post Your Requirement</span> - Get Property Alert in your Inbox</h3>
    <h6>More than 10,000 Properties added daily</h6>
  </div>
  <div style="border: 1px solid #ccc;" class="container form-padding">
    <div class="row">
      <div style="background-color: #fff;" class="p-4 col-md-9">
        <h5 class="text-black">Requirement Details <span class="text-danger">*</span> </h5>
        <div class="response">
          <?php
          if ($this->session->flashdata('response')) {
            echo $this->session->flashdata('response');
          }
          ?>
        </div>

        <form action="<?php echo $url['post_req']; ?>" method="post" class="post-requirment my-3">

          <!-- Form-row 1 -->
          <div class="form-row">
            <!-- Property Type -->
            <div class="form-group col-md-6">
              <select id="protype" name="post_type" onchange="myFunction()" class="form-control">
                <option disabled value="" selected>Property Type*</option>
                <option value="commercial">Commercial</option>
                <option value="residential">Residential</option>
              </select>
              <?php echo form_error('post_type') ? '<span class=" text-danger">' . form_error('post_type') . '</span>' : ''; ?>
            </div>

            <!-- BHK new -->
            <div class="form-group col-md-6">
              <select id="protype" name="BHK" onchange="myFunction()" class="form-control">
                <option disabled value="" selected>BHK*</option>
                <option value="1BHK">1 BHK</option>
                <option value="2BHK">2 BHK</option>
                <option value="3BHK">3 BHK</option>
                <option value="4BHK">4 BHK</option>
              </select>
              <?php echo form_error('BHK') ? '<span class=" text-danger">' . form_error('BHK') . '</span>' : ''; ?>
            </div>

          </div>




          <!-- <div class="form-row"> -->
          <!-- Min Budget -->
          <!-- <div class="form-group col-md-6">
              <input type="text" name="post_min" placeholder="Min Budget*" class="form-control">
              <?php // echo form_error('post_min') ? '<span class=" text-danger">' . form_error('post_min') . '</span>' : ''; 
              ?>
            </div> -->
          <!-- Max Budget -->
          <!-- <div class="form-group col-md-6">
              <input type="text" name="post_max" placeholder="Max Budget*" class="form-control">
              <?php // echo form_error('post_max') ? '<span class=" text-danger">' . form_error('post_max') . '</span>' : ''; 
              ?>

            </div> -->


          <!-- </div> -->





          <!-- Form-row 2 -->
          <div class="form-row">
            <!-- City -->
            <div class="form-group col-md-6">
              <input type="text" name="post_city" class="form-control" placeholder="City*">
              <?php echo form_error('post_city') ? '<span class=" text-danger">' . form_error('post_city') . '</span>' : ''; ?>
            </div>
            <!-- Locality -->
            <div class="form-group col-md-6">
              <input type="text" name="post_locality" class="form-control" placeholder="Locality*">
              <?php echo form_error('post_locality') ? '<span class=" text-danger">' . form_error('post_locality') . '</span>' : ''; ?>

            </div>

          </div>

          <!-- Form-row 3 -->
          <div class="form-row">
            <!-- Build Up Area  New-->
            <div class="form-group col-md-6">
              <input type="text" name="build_area" class="form-control" placeholder="Build Up Area (sq.ft) *">
              <?php echo form_error('build_area') ? '<span class=" text-danger">' . form_error('build_area') . '</span>' : ''; ?>
            </div>
            <!-- Need For  New-->
            <div class="form-group col-md-6">
              <select id="protype" name="need_for" onchange="myFunction()" class="form-control">
                <option disabled value="" selected>Need for*</option>
                <option value="girls">Girls</option>
                <option value="boys">Boys</option>
              </select>
              <?php echo form_error('need_for') ? '<span class=" text-danger">' . form_error('need_for') . '</span>' : ''; ?>

            </div>

          </div>

          <!-- Form-row 4 -->
          <div class="form-group">

            <input type="text" class="form-control" name="budget" placeholder="Budget *">
            <?php echo form_error('budget') ? '<span class=" text-danger">' . form_error('budget') . '</span>' : ''; ?>

          </div>





          <div id="unit">
            <div class="form-row">
              <div class="form-group col-md-4">
                <!-- <label for="inputState">State</label> -->
                <select name="post_unit" class="form-control">
                  <option selected>Select Unit*</option>
                  <option value="Sq.ft.">Sq.ft.</option>
                  <option value="Cent">Cent</option>
                  <option value="Sq. Yards">Sq. Yards</option>
                  <option value="Ares">Ares</option>
                  <option value="Acre">Acre</option>
                  <option value="Sq. Meter">Sq. Meter</option>
                  <option value="Bigha">Bigha</option>
                  <option value="Hectares">Hectares</option>
                  <option value="Guntha">Guntha</option>
                  <option value="Marla">Marla</option>
                  <option value="Dismil">Dismil</option>
                  <option value="Biswa">Biswa</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <input type="text" name="post_req_min" class="form-control" placeholder="Min">
              </div>
              <div class="form-group col-md-2">
                <input type="text" name="post_req_max" class="form-control" placeholder="Max">
              </div>
            </div>
          </div>
          <div id="bhk" class="form-row">
            <div class="form-group col-md-6">
              <select name="post_bhk" class="form-control">
                <option disabled value="" selected>Select BHK*</option>
                <option value="1">1 BHK</option>
                <option value="2">2 BHK</option>
                <option value="3">3 BHK</option>
                <option value="4">4 BHK</option>

              </select>
            </div>
          </div>
          <h5 class="text-black">Your Contact Details<span class="text-danger">*</span> </h5>

          <div class="form-group">
            <input type="text" class="form-control" name="post_name" placeholder="Name*">
            <?php echo form_error('post_name') ? '<span class=" text-danger">' . form_error('post_name') . '</span>' : ''; ?>

          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="post_email" placeholder="Email*">
              <?php echo form_error('post_email') ? '<span class=" text-danger">' . form_error('post_email') . '</span>' : ''; ?>

            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="post_phone" placeholder="Phone no.*">
              <?php echo form_error('post_phone') ? '<span class=" text-danger">' . form_error('post_phone') . '</span>' : ''; ?>

            </div>
          </div>
          <button type="submit" class="btn btn-danger w-100 my-4">Post my Requirement</button>
        </form>

      </div>
      <div style="border-left: 1px solid #ccc; background-color: #fafafa;" class="col-md-3 py-4 text-center">
        <h4 class="text-secondary py-3">Why Post through us?</h4>
        <div class="card post-card">
          <div class="card-image">
            <img class="img-responsive" alt="Video Marketing" src="https://static.realestateindia.com/rei/images/icon_01.jpg">
          </div>
          <div class="card-body">
            <p class="card-title">Searching of your dream property ends here</p>
          </div>
        </div>
        <div class="card post-card">
          <div class="card-image">
            <img class="img-responsive" alt="Video Marketing" src="https://static.realestateindia.com/rei/images/icon_04.jpg">
          </div>
          <div class="card-body">
            <p class="card-title">Get Properties in your Inbox</p>
          </div>
        </div>
        <div class="card post-card">
          <div class="card-image">
            <img class="img-responsive" alt="Video Marketing" src="https://static.realestateindia.com/rei/images/icon_03.jpg">
          </div>
          <div class="card-body">
            <p class="card-title">Get Properties in your Inbox</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function myFunction() {
    var v = $('#protype').val();
    console.log(v)
    if (v == 'commercial') {
      $('#unit').show();
      $('#bhk').hide();
    }
    if (v == 'residential') {
      $('#bhk').show();
      $('#unit').hide();
    }
  }
</script>