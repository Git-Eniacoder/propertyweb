<div id="layoutSidenav_content">
<main>
   <div class="container-fluid">
      <div class="container py-5">
      <form action="">
         <div class="row">
            <div class="col-md-10 border-right-1">
               <div class="form-group">
               <label for="">Heading</label>
               <input type="text" class="form-control" name="" id="heading" placeholder="Heading" required>
               </div>
               <textarea name="about" id="textareaContent" required></textarea>
            </div>
            <div class="col-md-2">
               <div class="form-group">
                 <label for="">Categories</label>
                 <select class="form-control form-control-sm" name="" id="">
                   <option>Technology</option>
                   <option>Web Development</option>
                   <option>App Development</option>
                 </select>
               </div>
               <div class="form-group">
                 <label for="">Url Of Post</label>
                 <input type="text" class="form-control" name="" id="permalink" placeholder="Permalink">
               </div>
               <div class="form-group">
                 <label for="">Featured Image</label>
                 <input type="file" class="form-control-file" name="" id="imagepreview" placeholder="Feature Image" aria-describedby="fileHelpId">
               </div>
               <div style="width:10em" class="my-3">
               <img id="blah" class="w-100" src="#" alt="your image" />
              </div>
               <div class="form-group">
                 <label for="">Meta Tags</label>
                 <textarea class="form-control" name="" id="" rows="3"></textarea>
               </div>
               <button type="submit" class="btn btn-success m-2 ali">Publish</button>
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
     get = get.substring(0, 30);
     $("#permalink").val(get);
   });
</script>
<script>
   function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imagepreview").change(function() {
  readURL(this);
});
</script>