<?php
function find_level_and_points($total_count){
  if($total_count<pow(6,1)){
      if($total_count==0)
          return array(1,50,0);
      if($total_count==1)
          return array(1,70,0);
      if($total_count==2)
          return array(1,90,0);
      if($total_count==3)
          return array(1,110,0);
      if($total_count==4)
          return array(1,130,0);
      if($total_count==5)
          return array(1,150,0);
      
  }
  if($total_count<pow(6,2)){
      return array(2,900,0);
  }
  if($total_count<pow(6,3)){
      if($total_count==pow(6,2))
      {
          return array(3,4320,10000);
      }
      return array(3,4320,0);
  }
  if($total_count<pow(6,4)){
      if($total_count==pow(6,3))
      {
          return array(4,12960,25000);
      }
      return array(4,12960,0);
  }
  if($total_count<pow(6,5)){
      if($total_count==pow(6,4))
      {
          return array(5,38880,50000);
      }
      return array(5,38880,0);
  }
  if($total_count<pow(6,6)){
      if($total_count==pow(6,5))
      {
          return array(6,233280,75000);
      }
      return array(6,233280,0);
  }
}
?>

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
                                                <th>User Name</th>
                                                <th>Mobile</th>
                                                <th>Referal Id</th>
                                                <th>Recharge Wallet</th>
                                                <th>Referal Wallet</th>
                                                <th>Field Wallet</th>
                                                <th>Total Refers</th>
                                                <th>User Level</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      <?php foreach($all_data as $value) {?>
                                            <tr>
                                              
                                                <td><?php echo $value['user_name'] ; ?></td>
                                                <td><?php echo $value['mobile_no'] ; ?></td>
                                                <td><?php echo $value['referid'] ; ?></td>
                                                <td><?php echo $value['recharge_wallet'] ; ?></td>
                                                <td><?php echo $value['refferal_wallet'] ; ?></td>
                                                <td><?php echo $value['filed_wallet'] ; ?></td>
                                                <td><?php echo $value['total_referal'] ; ?></td>
                                                <td><?php echo find_level_and_points($value['total_referal'])[0] ; ?></td>
                                                
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