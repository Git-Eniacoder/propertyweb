<style>
    .response{
        text-align : center;
        color : red;
    }
</style>
<main class="sub-main">
        <section class="getintouch">
            <div class="container">
                <div class="getintouch_head text-center">
                    <h1 class="getintouch_h1">Raise a Ticket</h1>
                </div>
            </div>
        </section>


        <section class="contact">
            <div class="container">
                <div class="contact_bx">
                    <div class="row justify-content-start">
                        <div class="col-md-8">
                            <div class="tickect-bx">
                                <div class="ticket_head">
                                    <h2 class="ticket_h2">Raise a Ticket</h2>
                                    <p>To get your deal done just raise your ticket</p>
                                </div>
                                <div class="response">
                                <?php
                                     if($this->session->flashdata('response')){
                                        echo $this->session->flashdata('response');
                                    }
                                ?>
                                </div>
                                <div class="form-group">
                                    <form method="post" action="<?php echo $url['support'].'submit_support'; ?>" enctype="multipart/form-data">
                                    <div class="">
                                            <label for="">Name</label>
                                            <input type="text" disabled  value="<?php echo $uname ?>" class=" contact_inp">
                                        </div>
                                        <div class="form-group">
                                          <label for="">Department*</label>
                                          <select onchange="myFunction()" id="dept" class="form-control" name="department" >
                                          <option selected disabled value="">Select Department</option>
                                            <option value="0">Technical Support</option>
                                            <option value="1">Billing</option>
                                            <option value="2">Payment Related</option>
                                
                                          </select>
                                          <?php echo form_error('department')? '<span class=" text-danger">'.form_error('department').'</span>' : '' ;?>

                                        </div>
                                        <div class="">
                                            <label for="">Subject *</label>
                                            <input type="text" name="subject"  class="contact_inp" placeholder="Subject">
                                            <?php echo form_error('subject')? '<span class=" text-danger">'.form_error('subject').'</span>' : '' ;?>

                                        </div>
                                        <div id="txn" class="">
                                            <label for="">Transaction ID *</label>
                                            <input type="text" name="teansaction"  class="contact_inp"
                                                placeholder="Transaction ID" >
                                                
                                        </div>

                                        <div class="">
                                            <label for="">Upload Image *</label>
                                            <input type="file" name="image" class="ticket_img">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Message *</label>
                                            <textarea name="message"  cols="30" rows="5" class="message_area contact_inp"
                                                placeholder="Message"></textarea>
                                                <?php echo form_error('message')? '<span class=" text-danger">'.form_error('message').'</span>' : '' ;?>

                                        </div>

                                        <div class="contact_btn_bx">
                                            <button type="submit" class="btn btn-primary contact_btn">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="contact_side">
                            <div class="contact_side_top">
                                <h2 class="contact_side_top_h1">We are here to Help you out</h2>
                                <p>The Contact Us page is one of the most important pages on your website. Get inspired by these 25 amazing examples,</p>
                            </div>
                            <div class="contact_side_top">
                                <h2 class="contact_side_top_h1">We are here to Help you out</h2>
                                <p>The Contact Us page is one of the most important pages on your website. Get inspired by these 25 amazing examples,</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        $('#txn').hide();
    function myFunction(){
        var v = $('#dept').val();

        if(v==2){
            $('#txn').show();
        }else{
            $('#txn').hide();
        }
        
    }
</script>