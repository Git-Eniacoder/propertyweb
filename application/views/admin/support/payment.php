<div id="layoutSidenav_content">
<main>
   <div class="container-fluid">
   <div class="card m-4 border-0">
   <span id="response" class="text-center"></span>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table " id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>User No</th>
                                                <th>User name</th>
                                                <th>Subject</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      <?php foreach($payment as $value) {?>
                                            <tr>
                                              
                                                <td><?php echo $value['user_id'] ; ?></td>
                                                <td><?php echo $value['user_name'] ; ?></td>
                                                <td><?php echo $value['support_subject'] ; ?></td>
                                                <td><?php echo $value['support_date'] ; ?></td>
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
                                                <td class="d-flex">
                                                    <a class="btn btn-info mx-1" href="<?php echo base_url().'assets/img/support/'.$value['support_image'] ?>"><i class="fa fa-image" aria-hidden="true"></i></a>
                                                    <a class="btn btn-success mx-1" href="<?php echo base_url().'admin/support/payment/update_fetch/'.$value['support_id'] ; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    <!-- <a class="btn btn-danger mx-1 text-white del" href="<?php echo base_url().'admin/support/payment/delete/'.$value['support_id'] ; ?>" data-value=""><i class="fa fa-trash" aria-hidden="true"></i></a> -->
                                                </td>
                                            </tr>
                                          
                                      <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
        
   </div>
</main>
<?php if(isset($update)) { ?>
<div class="modal" id="update">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header text-center">
          <h4 class="modal-title text-white">Query Resolve</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <p><span class="h5">Subject : </span><?php echo $update['support_subject'] ;?></p>
        <p><span class="h5">Message : </span><?php echo $update['support_message'] ;?></p>
        <form action="<?php echo base_url().'admin/support/billing/update/'.$update['support_id'] ?>" method="post">
            <div class="form-group">
              <label for="">Changes Status</label>
              <select class="form-control" name="status" >
                <option <?php echo ($update['support_status']==0)? 'selected' : ''?> value="0">In Progress</option>
                <option <?php echo ($update['support_status']==1)? 'selected' : ''?> value="1">Approved</option>
                <option <?php echo ($update['support_status']==2)? 'selected' : ''?> value='2'>Declined</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Change Department</label>
              <select  class="form-control" name="department" >
              <option <?php echo ($update['support_department']==2)? 'selected' : ''?> value="2">Payement Related</option>
                <option <?php echo ($update['support_department']==0)? 'selected' : ''?> value="0">Technical Support</option>
                <option <?php echo ($update['support_department']==1)? 'selected' : ''?> value="1">Billing</option>
              </select>
            </div>
            <input type="hidden" value="<?php echo $update['referid'] ?>" name="refer_id">
            <input type="hidden" value="<?php echo $update['user_id'] ?>" name="user_no">
            <div class="form-group">
              <label for="">Resolved Message</label>
              <textarea class="form-control" name="message"  rows="3"><?php echo $update['support_admin_msg'] ;?></textarea>
            </div>
         
        </div>
        
        <!-- Modal footer -->
        
        <div class="modal-footer">
          <button class="btn btn-success">Resolve</button>
          </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
    
  
  <script>
        $('#update').modal('show');
        </script>
        
<?php } ?>