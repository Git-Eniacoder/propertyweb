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
        <h3 class="pt-5"><span class="text-danger">Post Your Requirement</span> - Get Property Alert in your Inbox</h3>
        <h6>More than 10,000 Properties added daily</h6>
    </div>
    <div style="border: 1px solid #ccc;" class="container form-padding">
        <div class="row">
            <div style="background-color: #fff;" class="p-4 col-md-9">
                <h5 class="text-black">Requirement Details <span class="text-danger">*</span> </h5>
                <form class="post-requirment my-3">
                    <div class="form-group">
                        <!-- <label for="inputState">Property Type</label> -->
                        <select id="protype" onchange="myFunction()" class="form-control">
                          <option selected>Property Type*</option>
                          <option value="commercial">Commercial</option>
                          <option value="residential">Residential</option>
                        </select>
                      </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <!-- <label for="inputEmail4">Email</label> -->
                        <select id="inputState" class="form-control">
                            <option selected>Min Budget*</option>
                          
                          </select>
                      </div>
                      <div class="form-group col-md-6">
                        <!-- <label for="inputPassword4">Password</label> -->
                        <select id="inputState" class="form-control">
                            <option selected>Max Budget*</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <!-- <label for="inputAddress">Address</label> -->
                      <input type="email" class="form-control" id="inputAddress" placeholder="Locality*">
                    </div>
                    <div class="form-group">
                      <!-- <label for="inputAddress2">Address 2</label> -->
                      <input type="email" class="form-control" id="inputAddress2" placeholder="City*">
                    </div>
                    <div id="unit">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <!-- <label for="inputState">State</label> -->
                        <select id="inputState" class="form-control">
                          <option selected>Select Unit*</option>
                        <option value="Sq.ft.">Sq.ft.</option>
                            <option value="Cent">Cent</option>
                            <option value="Sq. Yards">Sq. Yards</option>
                            <option value="Ares">Ares</option>
                            <option value="Acre">Acre</option>
                            <option value="Sq. Meter">Sq. Meter</option>
                            <option value="Bigha">Bigha</option>
                            <option value="Hectares">Hectares</option>
                            <option value="Guntha">Guntha</option>
                            <option value="Marla">Marla</option>
                            <option value="Dismil">Dismil</option>
                            <option value="Biswa">Biswa</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <!-- <label for="inputZip">Zip</label> -->
                        <input type="email" class="form-control" placeholder="Min" id="inputZip">
                      </div>
                      <div class="form-group col-md-2">
                        <!-- <label for="inputZip">Zip</label> -->
                        <input type="email" class="form-control" placeholder="Max" id="inputZip">
                      </div>
                    </div>
                </div>
                    <div id="bhk" class="form-row">
                        <div class="form-group col-md-6">
                          <!-- <label for="inputState">State</label> -->
                          <select id="inputState" class="form-control">
                            <option selected>Select BHK*</option>
                            <option value="Sq.ft.">1 BHK</option>
                              <option value="Cent">2 BHK</option>
                              <option value="Sq. Yards">3 BHK</option>
                              <option value="Ares">4 BHK</option>
                              
                          </select>
                        </div>
                      </div>
                    <h5 class="text-black">Your Contact Details<span class="text-danger">*</span> </h5>
                   
                    <div class="form-group">
                        <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="Name*">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <!-- <label for="inputEmail4">Email</label> -->
                            <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="Email*">
                    </div>
                    <div class="form-group col-md-6">
                        <!-- <label for="inputPassword4">Password</label> -->
                        <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="Phone no.*">
                    </div>
                </div>
                <button type="submit" class="btn btn-danger w-100 my-4">Post my Requirement</button>
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