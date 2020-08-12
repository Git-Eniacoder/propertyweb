<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


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
  }
?>

<style>
    .response{
        text-align : center;
        color : red;
    }
</style>
<style>
 .contact{
    background-color:rgba(233, 230, 230, 0.7);
 }
.vie{
    width: 100%;
    height: auto;
    outline: none;
    padding-top: .5rem;
    padding-bottom: .5rem;
    border: none;
    background-color: rgb( 245, 57, 61);
    color: white;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 400;
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
.fa-facebook:hover{
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
table{
    width: 100%;
    height: auto;
    
}
.page-item.active .page-link{
    background-color: red;
    border: 2px solid red;
    width: 100%;
    outline: none;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover{
    background: none;
    border: none;
    outline: none;
}
.dataTables_wrapper .dataTables_paginate .paginate_button{
    padding: 0px;
    margin: 0px;
    border: 0px;
    border-radius: 0px;
    outline: none;
}
</style>
<!-- <main class="sub-main" > -->
        <!-- <section class="getintouch">
            <div class="container">
                <div class="getintouch_head text-center">
                    <h1 class="getintouch_h1">Raise a Ticket</h1>
                </div>
            </div>
        </section> -->


        
        <section class="contact p-0" >
        <div class="container-fluid bg-danger p-4">
                <div class="section">
                <h3 class="text-center text-white">Raise a Ticket</h3>
                </div>
            </div>
            <div class="container">
                <div style="padding-top: 1rem;">
                    <!-- <div class="row justify-content-start">
                        <div class="col-md-8"> -->
                            <div class="tickect-bx bg-white" style="margin-bottom: 2rem;">
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
                                        <input type="hidden" value=<?php echo $refer_id; ?> name="referid">
                                        <div class="contact_btn_bx">
                                            <button type="submit" class="btn btn-primary contact_btn">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            
                                
                            
                        </div> -->
                    <!-- </div> -->
                    <div class=" py-3">
                    <div class=" container bg-white  table-responsive" style="padding-top: 1rem;  padding-bottom:1rem; margin-bottom:2rem;">
                                <table id="example" class="table table-fluid" >
                                    <thead>
                                        <tr class="bg-white">
                                            <th>Subject</th>
                                            <th>Department</th>
                                            <th>Status</th>
                                            <th>Admin Msg</th>
                                            <th>Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($support_list as $value){?>
                                        <tr>
                                           <td><?php echo $value['support_subject'] ;?></td>
                                           <td>
                                               <?php 
                                                    if($value['support_department']==0){
                                                        echo "Technical Dept.";
                                                    }else if($value['support_department']==1){
                                                        echo "Billing Dept.";
                                                    }else if($value['support_department']==2){
                                                        echo "Payment Dept.";
                                                    }
                                               ?>
                                           </td>
                                           <td><?php 
                                                if($value['support_status'] == 0){
                                                       echo "<span class='text-white badge badge-warning'>In progress</span>"; 
                                                }
                                                if($value['support_status'] == 1){
                                                    echo "<span class='text-white badge badge-success'>Approved</span>";
                                                }
                                                if($value['support_status'] == 2){
                                                    echo "<span class='text-white badge badge-danger'>Declined</span>";
                                                }
                                                ?></td>
                                            <td><?php echo $value['support_admin_msg']; ?></td>
                                            <td><?php echo $value['support_date']; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>    
                                </table>
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
$(document).ready(function() {
    var table = $('#example').DataTable( {
        fixedHeader: true
    } );
} );
   </script>    
   <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
   <script src='https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js'></script>
   <script src='https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js'></script>
