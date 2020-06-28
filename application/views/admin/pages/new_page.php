
<div id="layoutSidenav_content">
<main>
   <div class="container-fluid">
      <div class="container py-5">
          <form action="<?php echo isset($update)? base_url().'admin/pages/new_page/updatepage/'.$update['page_id'] : base_url().'admin/pages/new_page/createpage' ;?>" id="pageform" method="post">
            <div class="row">
                <div class="col-md-10 border-right-1">
                    <span id="response"></span>
               <div class="form-group">
               <label for="">Page Name</label>
               <input type="text" class="form-control" name="pname" value="<?php echo isset($update)? $update['page_name'] : '' ;?>" id="heading" placeholder="Page Name" >
               </div>
               <div class="form-group">
                 <label for="">Page Content</label>
                 <textarea name="pcontent" id="textareaContent"><?php echo isset($update)? $update['page_desc'] : '' ;?></textarea>
               </div>  
            </div>
            <div class="col-md-2">
               <div class="form-group">
                 <label for="">Permalink</label>
                 <input type="text" class="form-control" value="<?php echo isset($update)? $update['page_url'] : '' ;?>" name="plink" id="permalink" placeholder="Permalink">
               </div>
               <div class="form-group">
                 <label for="">Meta Tags</label>
                 <textarea class="form-control" name="ptags" id="ptags" rows="3"><?php echo isset($update)? $update['page_tags'] : '' ;?></textarea>
               </div>
               <button type="submit" class="btn btn-success m-2 ali"><?php echo isset($update)? 'Update' : 'Publish' ;?></button>
            </div>
       </div>
       </form>
      </div>
   </div>
</main>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ckeditor/ckeditor.js"></script>
<script>
$(document).ready(function(){
    CKEDITOR.replace('textareaContent');
});
    </script>
<script>
   $( "#heading" ).change(function() {
     var get =  $("#heading").val();
     get = get.replace(/ /g,"_");
     get = get.toLowerCase(get.substring(0, 30));
     $("#permalink").val(get);
   });
</script>
<script>
$("#pageform").submit(function(event){
event.preventDefault();
var post_url = $(this).attr("action"); 
var request_method = $(this).attr("method"); 
var form_data = $(this).serialize(); 

$.ajax({
    url : post_url,
    type: request_method,
    dataType:"json",
    data : form_data, 
}).done(function(response){ 
    console.log(response);
    if(response.error == false){
        $('#response').html(response.msg);
    }
    if(response.error == true){
        $('#response').html(response.msg);
    }
    if(response.form== true){
        $('#response').html(response.msg);
    }
});
});
</script>