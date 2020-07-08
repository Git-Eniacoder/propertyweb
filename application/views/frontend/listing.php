<!-- List Property -->

 <?php

  // echo "<pre>";
  // print_r($update);
  // die();

 ?>

  <div class="list-main">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="form-head">
            <h3>List Your Property</h3>
            <hr class="style1">
          </div>

          <div class="list-form">






            <!-- List Form -->
            <form action="<?php echo $url['inreq'];?>" enctype="multipart/form-data" method="post">

              <?php echo validation_errors(); ?>

              <label>City<span style="color: red;">*</label>
              <input type="text" name="city" placeholder="city" class="list_input">

              <label>Description<span style="color: red;">*</label>
              <input type="text" name="description" placeholder="Property Description" class="list_input">

              <label>Rent<span style="color: red;">*</label>
              <input type="number" name="rent" placeholder="Rent " class="list_input">

              <label>BHK<span style="color: red;">*</label>
              <select name="bhk" id="">
                <option value="1">1 BHK</option>
                <option value="2">2 BHK</option>
                <option value="3">3 BHK</option>
                <option value="4">4 BHK</option>
              </select></br></br>


              <label>Choose file<span style="color: red;">*</label>
              <input type="file" name="list_img[]" placeholder="Choose File" class="list_input" multiple>

              <div>
                <?php if (isset($upload_error)) {
                  echo $upload_error;
                } ?>
              </div>

              <label>Furnished<span style="color: red;">*</label></br>
              <select name="furnished" id="">
                <option value="furnished">furnished</option>
                <option value="unfurnished">Unfurnished</option>
              </select></br></br>



              <label>For Whom<span style="color: red;">*</label></br>
              <select name="forwhom" id="">
                <option value="boys">Boys</option>
                <option value="girls">Girls</option>
                <option value="family">Family</option>
              </select></br></br>



              <label>Area<span style="color: red;">*</label></br>
              <input type="number" name="area" id="rent"></br>

              <button>Submit</button>

            </form>







          </div>


        </div>
        <div class="col-md-4">
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


  <!-- End Of List -->






