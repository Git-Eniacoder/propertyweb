<?php


// echo "<pre>";
// print_r($single["list_images"]);
// echo "</pre>";


?>


<!-- New Page Code -->

<main>

    <!-- Crousal -->
    <!-- php loop pending -->
    <div class="head_crousal">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 sing_page_img" src="./assets/img/ptne1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 sing_page_img" src="./assets/img/ptne2.jpeg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 sing_page_img" src="./assets/img/ptne3.jpg" alt="Third slide">
                    </div>
                </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon single_img_icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>


    <!-- Bottom Part -->

    <div class="bottom_content">
        <div class="container">
            <div class="row">


                <div class="col-lg-8">
                    <div class="contain_bx contain_bx_1">
                        <h2 class="sing_rent">&#8377; <?php echo $single['list_price'] ?> <span class="rent_tag">/ Month</span></h2>
                        <p class="detail_text_area">3 BHK Appartment | <span>1,850 sq.ft</span></p>
                        <p><?php echo $single['list_locality'] ?>, <span><?php echo $single['list_city']; ?></span></p>
                    </div>
                    <div class="contain_bx">
                        <h2 class="single_head">Key Details</h2>

                        <div class="row sing_details">

                            <div class="col sing_details_bx">
                                <p class="detail_tags"><span>Property Type</span></p>
                                <p class="detail_text"><?php echo $single['list_property_type'] ?></p>
                            </div>

                            <div class="col sing_details_bx">
                                <p class="detail_tags"><span>Status</span></p>
                                <p class="detail_text"><?php echo $single['list_furnished_type'] ?></p>
                            </div>

                        </div>

                        <div class="row sing_details">

                            <div class="col sing_details_bx">
                                <p class="detail_tags"><span>Area (sq.ft)</span></p>
                                <p class="detail_text"><?php echo $single['list_unit'] ?></p>
                            </div>

                            <div class="col sing_details_bx">
                                <p class="detail_tags"><span>Possession For</span></p>
                                <p class="detail_text"><?php echo $single['list_rent_out'] ?></p>
                            </div>

                        </div>


                    </div>
                    <div class="contain_bx contain_bx_2">

                        <div class="row align-items-center">
                            <div class="col-5">
                                <p class="dealer_name"><?php echo $single['list_name'] ?></p>
                                <span class="detail_tags">Posted By</span>
                            </div>
                            <div class="col-7 text-right">
                                <a href="tel:+91<?php echo $single["list_mobile"] ?>" class="connect">Let's Connect</a>
                            </div>
                        </div>

                    </div>

                    <div class="contain_bx contain_bx_3">
                        <h2 class="single_head">Description</h2>
                        <p><?php echo $single['list_description'] ?></p>
                    </div>
                </div>





                <!-- Form Connect to backend Pending -->
                <div class="col-lg-4">
                    <div class="contain_bx">
                        <form action="">
                            <div class="text-center">
                                <p class="detail_form_text">Do you want contact Details?</p>
                            </div>

                            <input type="text" class="contact_inp2" placeholder="Name">
                            <input type="email" class="contact_inp2" placeholder="email">
                            <div class="row" class="align-items-center">
                                <div class="col-2 pt-2"><Span>+91</Span></div>
                                <div class="col-10 mobile_inp"><input type="number" class="contact_inp2 " placeholder="Mobile Number"></div>
                            </div>

                            <div class="text-center mt-2">
                                <button class="btn connect-2">Get Contact Details</button>
                            </div>

                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>







</main>

























































<!-- Old Code -->

<!-- <style>
    .prop_detail_img {
        width: 640px;
        height: 360px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        height: 100px;
        width: 100px;
        background-size: 100%, 100%;

        background-image: none;
    }

    .carousel-control-next-icon:after {
        content: '>';
        font-size: 55px;
        color: red;
    }

    .carousel-control-prev-icon:after {
        content: '<';
        font-size: 55px;
        color: red;
    }
</style> -->



<!-- <div class="main_list">

    <div class="container mob_container">

        <div class="prop_detail_head">

        </div>

        <div class="property_bottom_bx justify-content-center">
            <div class="prop_detail_bottom">

                <div class="row">
                    <div class="col">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php $img = explode(",", $single["list_images"]); ?>
                                <?php for ($i = 0; $i < count($img); $i++) { ?>
                                    <div class="carousel-item <?php if ($i == 0) {
                                                                    echo "active";
                                                                } ?>">
                                        <img class="d-block w-100 prop_detail_img" src="<?php echo base_url() . 'assets/img/property_list/' . $img[$i]; ?>" alt="First slide">
                                    </div>
                                <?php } ?>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>


                </div>


                <div class="sing_botm">
                    <div class="row prop_detail_text">
                        <div class="col">
                            <h2 class="prop_detail_text-h2"><?php echo $single['list_bhk'] == "non-selected" ? "Area" :  $single['list_bhk'] . ' BHK Apartment' ?><span class="prop_detail_text-span"><?php echo $single['list_unit'] == "non-selected" ? "" : ' - ' . $single['list_unit'] . ' (sq.ft)' ?> </span> </h2>
                            <p class="prop_detail_text-p" prop_detail_text><?php echo $single['list_locality'] ?>, <?php echo $single['list_city']; ?></p>
                        </div>
                    </div>

                    <div class="row prop_detail_text-price">


                        <div class="col prop_detail_text-obx">
                            <div class="mb-2">
                                <span class="prop_detail_text-detail-rent">(Rent Per Month)</span>
                            </div>

                            <p><span class="prop_detail_text-detail">&#8377; <?php echo $single['list_price'] ?></span></p>

                        </div>

                        <div class="col prop_detail_text-obx">
                            <div class="mb-2">
                                <span class="prop_detail_text-detail-rent">Status</span>
                            </div>

                            <p><span class="prop_detail_text-other"><?php echo $single['list_furnished_type'] ?></span></p>

                        </div>

                        <div class="col prop_detail_text-obx">

                            <div class="mb-2">
                                <span class="prop_detail_text-detail-rent">(Owner)</span>
                            </div>

                            <p><span class="prop_detail_text-other">By <?php echo $single['list_name'] ?></span></p>

                        </div>

                    </div>

                    <div class="row prop_detail_text-price">
                        <div class="col prop_detail_text-obx">
                            <div class="mb-2">
                                <span class="prop_detail_text-detail-rent">Property Type</span>
                            </div>
                            <p><span class="prop_detail_text-other"><?php echo $single['list_property_type'] ?></span></p>

                        </div>
                        <div class="col prop_detail_text-obx">
                            <div class="mb-2">
                                <span class="prop_detail_text-detail-rent">Area (sq-ft)</span>
                            </div>
                            <p><span class="prop_detail_text-other"><?php echo $single['list_unit'] ?></span></p>
                        </div>

                        <div class="col prop_detail_text-obx">
                            <div class="mb-2">
                                <span class="prop_detail_text-detail-rent">Possesion For</span>
                            </div>

                            <p><span class="prop_detail_text-other"><?php echo $single['list_rent_out'] ?></span></p>

                        </div>

                    </div>


                    <div class="row prop_call_btn">
                        <a href="tel:+91<?php echo $single["list_mobile"] ?>"> <button class="btn prop_lists_btn prop_sing_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact</button></a>
                    </div>

                    <div class="row prop_detail_text">
                        <div class="col">
                            <h3 class="prop_detail_">Description</h3>
                            <p><?php echo $single['list_description'] ?></p>
                        </div>
                    </div>
                </div>






            </div>
        </div>


    </div>


</div> -->



         