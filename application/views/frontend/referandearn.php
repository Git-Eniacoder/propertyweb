<style>
    .refer_overlay{
        background-color: rgba(0, 0, 0, 0.349);
    }
  
</style>
    <main class="sub-main">
        <div class="referandearn">
          
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-sm-8 text-center refer-top-head">
                        <h2 class="refer-text">Share with your Friends and earn money</h2>
                        <p class="refer-text">Refer your friend to us and Earn Upto 50,000 per month</p>
                    </div>

                </div>
                <div class="refer-bx">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="">
                                <div class="refer-head">
                                    <h2 class="ticket_h2">If Somethings is in your Mind</h2>
                                </div>
                                <div class="form-group">
                                    <form action="">
                                        <div class="">

                                            <input type="text" name="" id="" class=" contact_inp"
                                                placeholder="Your Friends Name" aria-describedby="helpId">
                                        </div>
                                        <div class="">
                                            <input type="text" name="" id="" class="contact_inp"
                                                placeholder="Your Friends Email" aria-describedby="helpId">
                                        </div>
                                        <div class="">
                                            <input type="text" name="" id="" class="contact_inp"
                                                placeholder="Your Friends Mobile" aria-describedby="helpId">
                                        </div>
                                        
                                        <div class="">
                                            <input type="text" name="" id="" class="contact_inp"
                                                placeholder="Your Mobile" aria-describedby="helpId">
                                        </div>


                                        <div class="contact_btn_bx">
                                            <button type="submit" class="btn btn-primary send_invite">Send
                                                Invite</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                        <?php if($status) { ?>
                            <div class="">
                                <div class="refer-head">
                                    <h2 class="ticket_h2">Generate Your Referal Link</h2>
                                </div>
                                <div class="form-group">
                                        <div class="">
                                                <input type="text" name="" id="myInput" class=" contact_inp"
                                                    placeholder="Your Friends Name" aria-describedby="helpId"
                                                    value="http://hellorentindia.com/?id=<?php echo $post["all_data"][0]->referid;?>" disabled>
                                            <div class="contact_btn_bx">
                                            <!-- <p id="">Text</p> -->
                                            <button class="btn btn-primary send_invite" onclick="copyToClipboard('#myInput')">Copy Link</button>
                                             </div>
                                        </div>
                                </div>
                            </div>
                        <?php } else{?>
                            <div class="contact_btn_bx">
                                            <h5>Generate your referral link:</h5>
                                            <button class="btn btn-primary send_invite" data-toggle="modal" data-target="#login">Generate Link</button>
                                   
                                          </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
           
            </div>
        </div>

    </main>


<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).val()).select();
  document.execCommand("copy");
  $temp.remove();
  alert("Link Copied To Clipboard")
}
</script>

<!-- Refer and earn -->
<!-- Recharge Section -->

<!-- <div class="recharge-main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <div class="form-head">
                    <h3>Refer And Earn</h3>
                    <hr class="style1">
                </div>
                <div class="plans">
                   

                    <div>
                        <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
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
</div> -->



<!-- end Of recharge -->
