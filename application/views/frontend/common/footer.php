<script>

var dropdown = $('.wal_nav_dropdown');

$(".nav_bar_click").click(function(){


        dropdown.toggle('show');
 

  });


</script>
  
  
  
  <!--Start of Tawk.to Script-->
  
  
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      // s1.src='https://embed.tawk.to/5f16a3867258dc118beea2ec/default';
      s1.src = '<?php echo base_url() . 'assets/js/tawk.js'; ?>';
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
  <script>
    $("#reg").submit(function(event) {
      event.preventDefault();
      var post_url = $(this).attr("action");
      var request_method = $(this).attr("method");
      var form_data = $(this).serialize();
      console.log(form_data);
      $('#status').html('<div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
      $.ajax({
        url: post_url,
        type: request_method,
        dataType: "json",
        data: form_data,
      }).done(function(response) {
        console.log(response);
        if (response.form) {
          $('#status').html(response.msg);
        }
        if (response.status) {
          console.log(response);
          $('#status').html('');
          $('#reg').attr('action', '<?php echo base_url() . "otp/verify"; ?>');
          $('#reg').html('<input type="text" class="login_inp" placholder="Enter Otp" name="otp" required><button class="login_btn">Verify Otp</button>');
        }
        if (response.otp) {
          $('#reg').html('');
          $('#status').html(response.msg);
        }
      });
    });
  </script>
  <script>
    $("#loginn").submit(function(event) {
      event.preventDefault();
      var post_url = $(this).attr("action");
      var request_method = $(this).attr("method");
      var form_data = $(this).serialize();
      console.log(request_method);
      $('#logsts').html('<div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
      $.ajax({
        url: post_url,
        type: request_method,
        dataType: "json",
        data: form_data,
      }).done(function(response) {
        console.log(response);
        if (response.form) {
          $('#logsts').html(response.msg);
        }
        if (response.error) {
          $('#logsts').html(response.msg);
        }
        if (response.error == false) {
          location.reload(true);
        }

      });
    });
  </script>
  <script>
    $("#frest").submit(function(event) {
      event.preventDefault();
      var post_url = $(this).attr("action");
      var request_method = $(this).attr("method");
      var form_data = $(this).serialize();
      console.log(request_method);
      $('#resetid').html('<div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
      $.ajax({
        url: post_url,
        type: request_method,
        dataType: "json",
        data: form_data,
      }).done(function(response) {
        console.log(response);
        if (response.form) {
          $('#resetid').html(response.msg);
        }
        if (response.status) {
          console.log(response);
          $('#resetid').html('');
          $('#frest').attr('action', '<?php echo base_url() . "otp/verify_reset"; ?>');
          $('#frest').html('<input type="text" name="rotp" placeholder="Enter Otp" required><button class="login_btn">Verify Otp</button>');
        }
        if (response.otp) {
          console.log(response);
          $('#resetid').html(response.msg);

        }
      });
    });
  </script>
  <script>
    $('#para').click(function() {
      $('#otp').modal('show');
      $('#login').modal('hide');
    });
    $('#mreg').click(function() {
      $('#otp').modal('hide');
      $('#login').modal('hide');
      $('#register').modal('show');
    });
    $('#mlog').click(function() {
      $('#otp').modal('hide');
      $('#login').modal('show');
      $('#register').modal('hide');
    });
  </script>

  <!-- footer starts -->
  <div class="shadow-lg foot">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
          <h5>Links</h5>
          <hr class="style1">
          <h4 class="text-white"><?php echo $site['site_title']; ?></h4>
          <p><?php echo $site['site_desc']; ?></p>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
          <h5>quick links</h5>
          <hr class="style1">
          <div class="links">

            <a href="#">About Us</a></br>
            <a href="#">Refer and Earn</a></br>
            <a href="#">Privacy Policy</a></br>
            <a href="#">Terms and Condition</a></br>
            <a href="#">Sitemap</a></br>
            <a href="#">Blogs</a></br>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
          <h5>get in touch</h5>
          <hr class="style1">
          <input type="email" name="email" placeholder="Email here...">
          <span class="arrow"><img src="https://tirupatiinsurance.com/assest/img/arrow.svg" width="100%"></span>
          <!-- <p>Rajmahal Complex,Opp-PLA Petrol Pump,Delhi Road, Hisar-125001</p> -->
          <p><i class="fa fa-phone" style="margin-right: 7px; font-size: 20px;"></i>7392900007</p>
          <p><i class="fa fa-envelope" style="margin-right: 7px; font-size: 20px;"></i> info@walletapp.com</p>
        </div>
      </div>
    </div>
  </div>
  <section class="last">
    <div class="container">
      <p>follow us on</p>


      <div class="text-center">



        <a href="<?php echo $social['youtube_url']; ?>" target="_blank"> <i class="fa fa-youtube "></i></a>

        <a href="<?php echo $social['twitter_url']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>

        <a href="<?php echo $social['linkedin_url']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>

        <a href="<?php echo $social['facebook_url']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>

        <a href="<?php echo $social['instagram_url']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>

        <a href="<?php echo $social['pinterest_url']; ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
      </div>

      <p class="reserved">@<?php echo '20' . date('y'); ?> All Rights Reserved. Developed By <span><a href="#" class="lik">Hisarfever</a></span></p>
    </div>
  </section>

  <!-- footer ends  -->