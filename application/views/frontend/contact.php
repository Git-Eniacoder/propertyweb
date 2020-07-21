<style>
    .post-requirment input {
        padding: 0;
        margin: 0;
        outline-color: none;
        border: 1px solid #ced4da;
        outline-color: red;
        padding: .375rem .75rem;
    }

    #bhk {
        display: none;
    }

    #unit {
        display: none;
    }

    .post-card {
        border: none;
        background: none;
    }

    .post-card .card-body {
        color: #6c757d !important;
    }

    .post-card img {
        width: 3rem;
    }
</style>
<section class="py-5 px-3" style="background-color: #fafafa;">
    <div class="py-5 container text-center">
        <h3 class="pt-5"><span class="text-danger">Get In Touch with Us</span> - Free to ask any question from us</h3>
        <h6>More than 10,000 Properties added daily</h6>
    </div>
    <div style="border: 1px solid #ccc;" class="container form-padding">
        <div class="row">
            <div style="background-color: #fff;" class="p-4 col-md-9">
                <h5 class="text-black">Contact Us <span class="text-danger">*</span> </h5>
                <form class="post-requirment my-3">
                    <div class="form-group">
                        <!-- <label for="inputAddress">Address</label> -->
                        <input type="email" class="form-control" id="inputAddress" placeholder="Your name *">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="inputAddress2" placeholder="Your Email *">
                    </div>
                    <div class="form-group">
                        <input type="Number" class="form-control" id="inputAddress2" placeholder="Your Mobile *">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Your Text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger w-100 my-4">Submit</button>
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
    function myFunction() {
        var v = $('#protype').val();
        console.log(v)
        if (v == 'commercial') {
            $('#unit').show();
            $('#bhk').hide();
        }
        if (v == 'residential') {
            $('#bhk').show();
            $('#unit').hide();
        }
    }
</script>