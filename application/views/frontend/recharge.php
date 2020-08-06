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
<style>
.tab-custom{
    color: gray;
    padding: 7px;
}
a.active{
    /* color: blue !important; */
    border-bottom: 2px solid red;
}
.tab-custom:hover{
    color: black;
    text-decoration: none;
}
</style>
<section class="py-3 px-2" style="background-color: #fafafa;">
    <div class="pb-5 container text-center">
        <h3 class="pt-5">Bigger Saving Assured only on <span class="text-danger">Hello Rent India</span></h3>
        <h6>Now you can get Recharge of 1200 just paying 960 Rupees</h6>
    </div>
    <?php if ($status == false) { ?>
    <div class="container bg-white p-4 text-center">
        <h5>Already Paid ? <a class="text-danger" href="" data-toggle="modal" data-target="#login">Click Here</a> to Login in to wallet</h5>
    </div>
    <?php } ?>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-4 text-center">
                
                <div class="card mx-3 p-3 text-secondary bg-white border-0">
                    <h4 class="" >Scan QR Code</h4>
                <hr>    
                  <img class="card-img-top p-3" src="https://cdn.britannica.com/17/155017-050-9AC96FC8/Example-QR-code.jpg" alt="">
                  <div class="card-body py-0">
                    <h6 class="text-primary">Or</h6>
                    <p class="card-text">Pay Through UPI</p>
                    <h4 class="card-title">7014162976@ybl</h4>
                  </div>
                </div>
                <div class="card m-3 p-3 text-secondary bg-white border-0">
                    <h4 class="" >Earn Big</h4> 
                  <div class="card-body py-0">
                    <h6 class="text-dark">Upto 1,00,000/month</h6>
                    <p class="card-text">Wondering How ?</p>
                    <h6 class="card-title"><a class="text-danger" href="">Click Here</a> for Details</h6>
                  </div>
                </div>
               
            </div>
            <div class="col-md-8 bg-white">
                <nav>
                    <div class="nav nav-tabs p-3 text-center" id="nav-tab" role="tablist">
                      <a class="nav-item w-50 active tab-custom" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">How to Avail Offer</a>
                      <a class="nav-item w-50 tab-custom" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Terms and Condition</a>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active p-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <ul class="">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Sed id enim sed lectus volutpat tempor vel elementum nisi.</li>
                        <li>Nunc euismod urna id augue rhoncus, nec eleifend augue tincidunt.</li>
                        <li>Duis et purus eget ante mollis finibus non et dui.</li>
                        <li>Etiam et magna fermentum, pharetra turpis scelerisque, tincidunt turpis.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Sed id enim sed lectus volutpat tempor vel elementum nisi.</li>
                        <li>Nunc euismod urna id augue rhoncus, nec eleifend augue tincidunt.</li>
                        <li>Duis et purus eget ante mollis finibus non et dui.</li>
                        <li>Etiam et magna fermentum, pharetra turpis scelerisque, tincidunt turpis.</li>
                          </ul>                          
                    </div>
                    <div class="tab-pane fade p-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <ul class="">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Sed id enim sed lectus volutpat tempor vel elementum nisi.</li>
                        <li>Nunc euismod urna id augue rhoncus, nec eleifend augue tincidunt.</li>
                        <li>Duis et purus eget ante mollis finibus non et dui.</li>
                        <li>Etiam et magna fermentum, pharetra turpis scelerisque, tincidunt turpis.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Sed id enim sed lectus volutpat tempor vel elementum nisi.</li>
                        <li>Nunc euismod urna id augue rhoncus, nec eleifend augue tincidunt.</li>
                        <li>Duis et purus eget ante mollis finibus non et dui.</li>
                        <li>Etiam et magna fermentum, pharetra turpis scelerisque, tincidunt turpis.</li>
                          </ul>  
                    </div>
                  </div>
                
            </div>
        </div>
    </div>
</section>