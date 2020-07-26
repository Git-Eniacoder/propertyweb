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
                                                <th>Sign up Date</th>
                                                <th>User Status</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                      <?php foreach($all_data as $value) {?>
                                            <tr>
                                              
                                                <td><?php echo $value['user_name'] ; ?></td>
                                                <td><?php echo $value['mobile_no'] ; ?></td>
                                                <td><?php echo $value['date'] ; ?></td>
                                                <td>
                                                <?php
                                                    if($value['user_status'] == "ACTIVE"){
                                                        echo "<span id='userstatus".$value['mobile_no']."' data-value='ACTIVE' class='text-white badge badge-success'> Active </span>"; 
                                                        echo '<a href="#" class="del" data-value="'.$value['mobile_no'].'"><i class="fa fa-power-off" id="powerbutton'.$value['mobile_no'].'" style="color:red; margin-left:23px" aria-hidden="true"></i></a>';
                                                    }
                                                    else{
                                                        echo "<span id='userstatus".$value['mobile_no']."' data-value='DEACTIVE' class='text-white badge badge-danger'>Deactive</span>";
                                                        echo '<a href="#" class="del" data-value="'.$value['mobile_no'].'"><i class="fa fa-power-off" id="powerbutton'.$value['mobile_no'].'" style="color:green; margin-left:10px" aria-hidden="true"></i></a>';
                                                        
                                                    }
                                                ?>
                                                
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


<!-- Modal -->
<div id="user_status" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <p>Are you sure you want to change the status</p>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url().'admin/users/users/change_user_status/hello'; ?>"><button type="button" class="btn btn-default" >Confirm</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script type="text/javascript">
$(".del").click(function(){
    //$('#response').html('<center><div class="spinner-border text-warning" role="status"><span class="sr-only">Loading...</span></div></center>');
    i=$(this).data("value");
    j=$("#userstatus"+i).data("value");
    console.log(i);
    console.log(j);
    if(j=="ACTIVE")
    {
        $("#userstatus"+i).html("Deactive");
        $("#powerbutton"+i).css("color","green");
        $("#powerbutton"+i).css("margin-left","10px");
        $("#userstatus"+i).data("value","DEACTIVE");
        $("#userstatus"+i).removeClass("badge-success");
        $("#userstatus"+i).addClass("badge-danger");
    }
    else{
        $("#userstatus"+i).html(" Active ");
        $("#powerbutton"+i).css("color","red");
        $("#powerbutton"+i).css("margin-left","23px");
        $("#userstatus"+i).data("value","ACTIVE");
        $("#userstatus"+i).removeClass("badge-danger");
        $("#userstatus"+i).addClass("badge-success");
        

    }
    
  $.ajax({
    url: "<?php echo base_url() ;?>admin/users/users/change_user_status?var1="+i+"&var2="+j, 
    success: function(result){
        if(result == true){
        $('#response').html('<p class="text-success">Record Deleted</p>');
    }
      
  }});
});
</script>