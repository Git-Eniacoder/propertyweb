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
                                                <th>Post Id</th>
                                                <th>Post Name</th>
                                                <th>Post Email</th>
                                                <th>Post Mobile</th>
                                                <th> Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      <?php foreach($values as $value) {?>
                                            <tr id="hide<?php echo $value['post_id'] ; ?>">
                                              
                                                <td><?php echo $value['post_id'] ; ?></td>
                                                <td><?php echo $value['post_name'] ; ?></td>
                                                <td><?php echo $value['post_email'] ; ?></td>
                                                <td><?php echo $value['post_phone'] ; ?></td>
                                                <td><?php echo $value['post_date'] ; ?></td>
                                                <td class="d-flex">
                                                    <!-- <a class="btn btn-success mx-1" href="<?php //echo base_url() ; ?>admin/pages/new_page/update/<?php //echo $value['page_id'] ; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a> -->
                                                    <a class="btn btn-danger mx-1 text-white del"   href="<?php echo base_url().'admin/post/post_req/update_fetch/'.$value['post_id'] ; ?>"><i  class="fa fa-trash" aria-hidden="true"></i></a>
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
            <p><span>post id : </span><?php echo $update['post_id'] ;?></p>
            <p><span>post type : </span><?php echo $update['post_type'] ;?></p>
            <p><span>post budget : </span><?php echo $update['post_budget'] ;?></p>
            <p><span>post locality : </span><?php echo $update['post_locality'] ;?></p>
            <p><span>post city : </span><?php echo $update['post_city'] ;?></p>
            <p><span>post bhk : </span><?php echo $update['post_bhk'] ;?></p>
            <p><span>post size : </span><?php echo $update['post_size'] ;?></p>
            <p><span>post name : </span><?php echo $update['post_name'] ;?></p>
            <p><span>post email : </span><?php echo $update['post_email'] ;?></p>
            <p><span>post phone : </span><?php echo $update['post_phone'] ;?></p>
            <p><span>post date : </span><?php echo $update['post_date'] ;?></p>
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