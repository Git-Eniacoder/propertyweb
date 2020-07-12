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
                                            
                                                <th>City</th>
                                                <th>Description</th>
                                                <th>Rent</th>
                                                <th>BHK</th>
                                                <th>Furnished</th>
                                                <th>For whom</th>
                                                <th>Area</th>
                                                <th> Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      <?php foreach($values as $value) {?>
                                            <tr id="hide<?php echo $value['id'] ; ?>">
                                              
                                                <td><?php echo $value['city'] ; ?></td>
                                                <td><?php echo $value['description'] ; ?></td>
                                                <td><?php echo $value['rent'] ; ?></td>
                                                <td><?php echo $value['bhk'] ; ?></td>
                                                <td><?php echo $value['furnished'] ; ?></td>
                                                <td><?php echo $value['forwhom'] ; ?></td>
                                                <td><?php echo $value['area'] ; ?></td>
                                                <td><?php echo $value['post_time'] ; ?></td>
                                               
                                                
                                                <td class="d-flex">
                                                    <!-- <a class="btn btn-success mx-1" href="<?php //echo base_url() ; ?>admin/pages/new_page/update/<?php //echo $value['page_id'] ; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a> -->
                                                    <a class="btn btn-danger mx-1 text-white del" href="<?php echo base_url() ; ?>admin/post/list_req/deletelist/<?php echo $value['id'] ; ?>" data-value="<?php echo $value['id'] ; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
<!-- <script type="text/javascript">

$(".del").click(function(){
    $('#response').html('<center><div class="spinner-border text-warning" role="status"><span class="sr-only">Loading...</span></div></center>');
    i=$(this).data("value");
    $("#hide"+i).fadeOut();
    console.log(i);
  $.ajax({
    url: "<?php //echo base_url() ;?>admin/pages/all_page/delete/"+i, 
    success: function(result){
        if(result == true){
        $('#response').html('<p class="text-success">Record Deleted</p>');
    }
      
  }});
});
</script> -->