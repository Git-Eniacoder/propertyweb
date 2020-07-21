<style>
.post-requirment input{
    padding: 0;
    margin: 0;
    outline-color: none;
    border :1px solid #ced4da;
    outline-color : red;
    padding: .375rem .75rem;
}
#bhk{
    display: none;
}
#unit{
    display: none;
}
.list-img{
  width : 4rem;
  margin : 10px 4px;
}
.post-card
{
    border: none;
    background: none;
}
.post-card .card-body{    
    color: #6c757d!important;
}
.post-card img{
    width: 3rem;
}

</style>
<section class="py-5 px-3" style="background-color: #fafafa;">
    <div class="py-5 container text-center">
        <h3 class="pt-5"><span class="text-danger">List Your Property</span> - Get Renters of your Choice</h3>
        <h6 class="">Thousand of Renters Searching Daily</h6>
    </div>
    <div style="border: 1px solid #ccc;" class="container form-padding">
        <div class="row">
            <div style="background-color: #fff;" class="p-4 col-md-9">
                <h5 class="text-black">Requirement Details <span class="text-danger">*</span> </h5>
                <form class="post-requirment my-3">
                <div class="form-row">
                        <div class="form-group col-md-6">
                            <!-- <label for="inputEmail4">Email</label> -->
                            <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Your Name*">
                    </div>
                    <div class="form-group col-md-6">
                        <!-- <label for="inputPassword4">Password</label> -->
                        <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Mobile Number*">
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-6">
                            <!-- <label for="inputEmail4">Email</label> -->
                            <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Your Email*">
                    </div>
                    <div class="form-group col-md-6">
                        <!-- <label for="inputPassword4">Password</label> -->
                        <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Your City*">
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-6">
                            <!-- <label for="inputEmail4">Email</label> -->
                            <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="Locality*">
                    </div>
                    <div class="form-group col-md-6">
                        <!-- <label for="inputPassword4">Password</label> -->
                        <select id="protype" onchange="myFunction()" class="form-control">
                            <option selected>Select Property Type*</option>
                            <option value="commercial">Commercial</option>
                              <option value="residential">Residential</option>     
                        </select>
                  </div>
                </div>
                        <div id="bhk" class="form-group">
                            <!-- <label for="inputEmail4">Email</label> -->
                            <select id="inputState" class="form-control">
                            <option selected>BHK Size*</option>
                            <option value="Sq.ft.">1 BHK</option>
                              <option value="Cent">2 BHK</option>
                              <option value="Sq. Yards">3 BHK</option>
                              <option value="Ares">4 BHK</option>
                          </select>
                        </div>
                    <div id="unit" class="form-group">
                        <!-- <label for="inputPassword4">Password</label> -->
                        <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Build Up Area in Sq. Ft*">
                    </div>
                <div class="form-row">
                        <div class="form-group col-md-6">
                            <!-- <label for="inputEmail4">Email</label> -->
                            <select id="inputState" class="form-control">
                            <option selected>Furnished Type*</option>
                            <option value="Sq.ft.">Furnished</option>
                              <option value="Cent">Semi Furnished</option>
                              <option value="Sq. Yards">Non-Furnished</option>
                          </select>
                    </div>
             
                    <div class="form-group col-md-6">
                        <!-- <label for="inputPassword4">Password</label> -->
                        <select id="inputState" class="form-control">
                            <option selected>Willing to Rent Out*</option>
                            <option value="Sq.ft.">1 BHK</option>
                              <option value="Cent">2 BHK</option>
                              <option value="Sq. Yards">3 BHK</option>
                              <option value="Ares">4 BHK</option>
                              
                          </select>
                    </div>
</div>
          <div class="form-group">
            <input type="file" class="form-control-file" name="" id="gallery-photo-add" placeholder="Upload Images" multiple aria-describedby="fileHelpId">
          </div>
          <div class="gallery d-flex flex-wrap"></div>
                <div class="form-group">
                  <textarea class="form-control" name="" id="" rows="3">Brief Description or Message</textarea>
                </div>
                <button type="submit" class="btn btn-danger w-100 my-4">List my Property</button>
                  </form>
            
            </div>
            <div style="border-left: 1px solid #ccc; background-color: #fafafa;" class="col-md-3 py-4 text-center">
                <h4 class="text-secondary py-3">Why Post through us?</h4>
                <div class="card post-card">
                    <div class="card-image">
                        <img class="img-responsive" alt="Video Marketing" src="https://static.realestateindia.com/rei/images/icon_01.jpg">
                      </div>                    
                      <div class="card-body">
                    <p class="card-title">Searching of your dream property ends here</p>
                  </div>
                </div>
                <div class="card post-card">
                    <div class="card-image">
                        <img class="img-responsive" alt="Video Marketing" src="https://static.realestateindia.com/rei/images/icon_04.jpg">
                      </div>                      
                      <div class="card-body">
                      <p class="card-title">Get Properties in your Inbox</p>
                    </div>
                  </div>
                  <div class="card post-card">
                    <div class="card-image">
                        <img class="img-responsive" alt="Video Marketing" src="https://static.realestateindia.com/rei/images/icon_03.jpg">
                      </div>                    
                    <div class="card-body">
                      <p class="card-title">Get Properties in your Inbox</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>

<script>
    function myFunction(){
        var v = $('#protype').val();
        console.log(v)
        if(v=='commercial'){
            $('#unit').show();
            $('#bhk').hide();
        }
        if(v=='residential'){
            $('#bhk').show();
            $('#unit').hide();
        }
    }
</script>
<script>
  $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img class="list-img">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
</script>