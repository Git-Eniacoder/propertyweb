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
                                                <th>Property Id</th>
                                                <th>Property Name</th>
                                                <th>Property Email</th>
                                                <th>Property Mobile</th>
                                                <th> Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      <?php foreach($values as $value) {?>
                                            <tr id="hide<?php echo $value['property_id'] ; ?>">
                                              
                                                <td><?php echo $value['property_id'] ; ?></td>
                                                <td><?php echo $value['list_name'] ; ?></td>
                                                <td><?php echo $value['list_email'] ; ?></td>
                                                <td><?php echo $value['list_mobile'] ; ?></td>
                                                <td><?php echo $value['list_date'] ; ?></td>
                                                <td class="d-flex">
                                                    <!-- <a class="btn btn-success mx-1" href="<?php //echo base_url() ; ?>admin/pages/new_page/update/<?php //echo $value['page_id'] ; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a> -->
                                                    <a class="btn btn-danger mx-1 text-white del"   href="<?php echo base_url().'admin/post/list_req/update_fetch/'.$value['property_id'] ; ?>"><i  class="fa fa-eye" aria-hidden="true"></i></a>
                                                    <a class="btn btn-danger mx-1 text-white del"   href="<?php echo base_url().'admin/post/list_req/delete_row/'.$value['property_id'] ; ?>"><i  class="fa fa-trash" aria-hidden="true"></i></a>
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
          <h4 class="modal-title text-white">Detailed Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <p><span style="font-weight:bold;">Property id : </span><?php echo $update['property_id'] ;?></p>
            <p><span style="font-weight:bold;">Property name : </span><?php echo $update['list_name'] ;?></p>
            <p><span style="font-weight:bold;">Property mobile : </span><?php echo $update['list_mobile'] ;?></p>
            <p><span style="font-weight:bold;">Property email : </span><?php echo $update['list_email'] ;?></p>
            <p><span style="font-weight:bold;">Property city : </span><?php echo $update['list_city'] ;?></p>
            <p><span style="font-weight:bold;">Property locality : </span><?php echo $update['list_locality'] ;?></p>
            <p><span style="font-weight:bold;">Property Type : </span><?php echo $update['list_property_type'] ;?></p>
            <p><span style="font-weight:bold;">Property BHK : </span><?php echo $update['list_bhk'] ;?></p>
            <p><span style="font-weight:bold;">Property unit : </span><?php echo $update['list_unit'] ;?></p>
            <p><span style="font-weight:bold;">Property Furnished : </span><?php echo $update['list_furnished_type'] ;?></p>
            <p><span style="font-weight:bold;">Property rent out : </span><?php echo $update['list_rent_out'] ;?></p>
            <p><span style="font-weight:bold;">Property description : </span><?php echo $update['list_description'] ;?></p>
            <p><span style="font-weight:bold;">Property date : </span><?php echo $update['list_date'] ;?></p>
        </div>
        
        <!-- Modal footer -->
        
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
    
  
  <script>
        $('#update').modal('show');
        </script>
        
<?php } ?>