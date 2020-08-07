<style>
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
</style>

<div class="main_list">

    <div class="container">
        
        <div class="prop_detail_head">

        </div>

        <div class="prop_detail_bottom">
            <div class="row">
                <div class="col">
                    <!-- <img src="assets/img/homeimgs/flat1.jpg" alt="" class="prop_detail_img"> -->
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
            <div class="row prop_detail_text">
                <div class="col">
                    <h2 class="prop_detail_text-h2"><?php echo $single['list_bhk']; ?> BHK <span class="prop_detail_text-span"><?php echo $single['list_unit'] == "non-selected" ? "" : '-' . $single['list_unit'] . 'sq ft' ?> </span> </h2>
                    <p class="prop_detail_text-p" prop_detail_text><?php echo $single['list_locality'] ?>, <?php echo $single['list_city']; ?></p>
                </div>
            </div>

            <div class="row prop_detail_text-price">
                <div class="col">
                    <p><span class="prop_detail_text-detail">&#8377; <?php echo $single['list_price'] ?></span></p>
                    <p><span class="prop_detail_text-detail-rent">Rent (Per Month)</span></p>
                </div>
                <div class="col prop_detail_text-obx">
                    <p><span class="prop_detail_text-other"><?php echo $single['list_furnished_type'] ?></span></p>
                </div>
                <!-- <div class="col prop_detail_text-obx">
                   <p><span class="prop_detail_text-other" >Semi-Furnished</span></p>
                </div> -->
                <div class="col prop_detail_text-obx">
                    <p><span class="prop_detail_text-other">By <?php echo $single['list_name'] ?></span></p>
                </div>

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