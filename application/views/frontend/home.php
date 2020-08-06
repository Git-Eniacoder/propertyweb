<style>
    @media (max-width: 768px) {
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    /* display 3 */
    @media (min-width: 768px) {

        .carousel-inner .carousel-item-right.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(33.333%);
        }

        .carousel-inner .carousel-item-left.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-33.333%);
        }
    }

    .carousel-inner .carousel-item-right,
    .carousel-inner .carousel-item-left {
        transform: translateX(0);
    }
</style>



<main class="sub-main">

    <section class="hero">
        <div class="container">
            <div class="hero_head">
                <div class="row justify-content-center">
                    <div class="col text-center">
                        <h1 class="hero_head_h1">Lets Find You A Perfect Property</h1>
                        <p class="hero_head_p">according to your needs</p>
                    </div>
                </div>
            </div>

            <!-- <div class="hero_search hero_search_bx">
                <div class="row justify-content-center">
                    <div class="col-sm-2 fg">
                        <div class="form-group">
                            <select name="" id="" class="hero_input">
                                <option value="">Choose Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 fg">
                        <div class="form-group">
                            <input type="text" class="hero_input" name="" id="" aria-describedby="helpId" placeholder="Search Locality">
                        </div>
                    </div>
                    <div class="col-sm-2 fg">
                        <div class="form-group">
                            <select name="" id="" class="hero_input">
                                <option value="">Property Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 fg">
                        <button class="hero_btn">Search</button>
                    </div>
                </div>
            </div> -->

            <!-- Search Bar -->

            <div class="hero_search">
                <!-- <div class="row justify-content-center text-center">
                    <div class="col-md-8">
                        <div>
                            <select name="" id="" class="hero_inputs">
                                <option value="">Choose City</option>
                                <option value="">Ajmer</option>
                                <option value="">Jaipur</option>
                                <option value="">Bilwara</option>
                            </select>
                            <input type="text" class="hero_inputs" placeholder="Search Locality">
                            <select name="" id="" class="hero_inputs">
                                <option value="">Property Type</option>
                            </select>
                            <button class="hero_inputs_btn">Search</button>
                        </div>
                    </div>

                </div> -->

                <div class="row justify-content-center align-items-center">
                    <div class="col text-center">
                        <div class="searchbar_bx">
                            <form method="post" action="<?php echo base_url() . 'propertydetail/search_single'; ?>">
                                <select name="city" id="city" class="searchbar sb_1">
                                    <option selected disabled value="">CHOOSE CITY</option>
                                    <option value="jaipur">Jaipur</option>
                                    <option value="delhi">Delhi</option>
                                </select>
                                <input list="searches" type="text" id="click" class="searchbar sb_2" placeholder="SEARCH LOCALITY">
                                <datalist id="searches">

                                </datalist>
                                <select name="type" id="type" class="searchbar sb_3">
                                    <option selected disabled value="">PROPERTY TYPE</option>
                                    <option value="residential">Residential Property</option>
                                    <option value="commercial">Commercial Property</option>
                                </select>
                                <button class="searchbar sb_4"><i class="fa fa-search" aria-hidden="true"></i>
                                    SEARCH
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


            <div class="hero_post_bx">
                <div class="row justify-content-center align-items-center">
                    <div class="col post_line"></div>
                    <div class="col-7 post_mob">Are you a Property Owner?</div>
                    <div class="col post_line"></div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <a href="<?php echo $url['post_property']; ?>"> <button class="btn hero_post_bx_btn">Post Your Free Ad</button></a>
                </div>
            </div>



            <!-- Search  -->
            <div class="hero_service">
                <div class="row justify-content-center align-items-center ">

                    <div class="col-md-3  hero_service_bx hero_ser_shadow" data-toggle="modal" data-target="#exampleModal">

                        <a href="#" class="hero_ser_link">
                            <div class="ser">
                                <img src="assets/img/homeimgs/rentp.png" alt="" class="hero_ser_img">
                                <p class="hero_ser_text">Rental Portal</p>
                            </div>
                        </a>


                    </div>

                    <div class="col-md-3  hero_service_bx hero_ser_shadow">
                        <a href="<?php echo $url['recharge']; ?>" class="hero_ser_link">
                            <div class="ser">
                                <img src="assets/img/homeimgs/rechargep.png" alt="" class="hero_ser_img">
                                <p class="hero_ser_text">Recharge Portal</p>
                                <!-- <a href="" class="hero_ser_text">Recharge Portal</a> -->
                            </div>
                        </a>


                    </div>
                    <!-- <div class="col-md-3  hero_service_bx">

                        <a href="<?php echo $url['post_property']; ?>" class="hero_ser_link">
                            <div class="ser">
                                <img src="assets/img/homeimgs/postp.png" alt="" class="hero_ser_img">
                                <p class="hero_ser_text">Post Requirement</p>
                            </div>
                        </a>

                    </div> -->
                    <div class="col-md-3  hero_service_bx hero_ser_shadow">
                        <a href="<?php echo base_url() . 'shopping' ?>" class="hero_ser_link">
                            <div class="ser">
                                <img src="assets/img/homeimgs/rentp.png" alt="" class="hero_ser_img">
                                <p class="hero_ser_text">Shopping Portal</p>
                                <!-- <a href="" class="hero_ser_text">Post Requirement</a> -->
                            </div>
                        </a>


                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- HERO btn Modal Pop Up -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content property_modal">
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body text-center">
                    <div>
                        <a name="" id="" class="btn list_btns" href="<?php echo $url['post_property']; ?>" role="button">Post Requirement</a>
                    </div>
                    <div>
                        <a name="" id="" class="btn list_btns" href="<?php echo $url['list']; ?>" role="button">List Property</a>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>








    <!-- Trending Properties -->
    <section class="trending top_trend">
        <div class="container text-center my-3">
            <div class="home_subhead">
                <div class="row justify-content-start align-items-center">
                    <div class="col-sm-3 ">
                        <h2 class="home_subhead_text text-center text-start">Trending Properties</h2>
                    </div>
                    <div class="col-sm-9">
                        <hr class="home_subhead_line">
                    </div>
                </div>
            </div>
            <!-- <div class="home_row">
                <div class="row">
                    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">

                            <div class="carousel-item active">
                             
                                <?php foreach ($post as $value) { ?>
                                    <div class="card text-left prop_lists">
                                        <a href=""><img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt=""></a>
                                        <div class="card-body">
                                            <span class="prop_lists_price">&#8377; <?php echo $value["list_price"] ?></span>
                                            <p class="prop_lists_rent"><span><?php echo $value["list_rent_flag"] == 0 ? "Rent" : "sale" ?></span></p>
                                            <a href="" class="card_head_text">
                                                <h4 class=" prop_lists_text"><?php echo $value["list_bhk"] == "non-selected" ? $value["list_unit"] . " 180 (sq-ft)" : $value["list_bhk"] . " BHK appartment"  ?> </h4>
                                            </a>
                                            <p class="prop_lists_add">in <?php echo $value["list_city"] ?> for <?php echo $value["list_rent_flag"] == 0 ? "Rent" : "sale" ?></p>
                                            <p class="prop_lists_add"><?php echo $value["list_date"] ?> </p>
                                            <p><span class="prop_lists_rent"><?php echo $value["list_name"] ?></span></p>
                                            <div class="text-center">
                                                <a href="tel:+91<?php echo $value["list_mobile"] ?>"> <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact</button></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                        <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div> -->

            <div class="row mx-auto my-auto trend_contain">
                <div id="recipeCarousel" class="carousel carousel slide w-100" data-ride="carousel">
                    <div class="inner_container">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item carousel-item active">
                                <div class="col-md-4">
                                    <div class="card text-left prop_lists prop_lists2">
                                        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
                                            <p class="prop_lists_add">in Alsanatham for Sale
                                                Within 3-6 months</p>
                                            <p><span>Vaishali Nagar</span></p>

                                            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


                                            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
                                            <p class="prop_lists_rent"><span>Rent</span></p>
                                            <div class="text-start">
                                                <span class="poster_name">By Anshul</span>
                                                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item">
                                <div class="col-md-4">
                                    <div class="card text-left prop_lists prop_lists2">
                                        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
                                            <p class="prop_lists_add">in Alsanatham for Sale
                                                Within 3-6 months</p>
                                            <p><span>Vaishali Nagar</span></p>

                                            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


                                            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
                                            <p class="prop_lists_rent"><span>Rent</span></p>
                                            <div class="text-start">
                                                <span class="poster_name">By Anshul</span>
                                                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item">
                                <div class="col-md-4">
                                    <div class="card text-left prop_lists prop_lists2">
                                        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
                                            <p class="prop_lists_add">in Alsanatham for Sale
                                                Within 3-6 months</p>
                                            <p><span>Vaishali Nagar</span></p>

                                            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


                                            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
                                            <p class="prop_lists_rent"><span>Rent</span></p>
                                            <div class="text-start">
                                                <span class="poster_name">By Anshul</span>
                                                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item">
                                <div class="col-md-4">
                                    <div class="card text-left prop_lists prop_lists2">
                                        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
                                            <p class="prop_lists_add">in Alsanatham for Sale
                                                Within 3-6 months</p>
                                            <p><span>Vaishali Nagar</span></p>

                                            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


                                            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
                                            <p class="prop_lists_rent"><span>Rent</span></p>
                                            <div class="text-start">
                                                <span class="poster_name">By Anshul</span>
                                                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item">
                                <div class="col-md-4">
                                    <div class="card text-left prop_lists prop_lists2">
                                        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
                                            <p class="prop_lists_add">in Alsanatham for Sale
                                                Within 3-6 months</p>
                                            <p><span>Vaishali Nagar</span></p>

                                            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


                                            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
                                            <p class="prop_lists_rent"><span>Rent</span></p>
                                            <div class="text-start">
                                                <span class="poster_name">By Anshul</span>
                                                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item">
                                <div class="col-md-4">
                                    <div class="card text-left prop_lists prop_lists2">
                                        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
                                            <p class="prop_lists_add">in Alsanatham for Sale
                                                Within 3-6 months</p>
                                            <p><span>Vaishali Nagar</span></p>

                                            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


                                            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
                                            <p class="prop_lists_rent"><span>Rent</span></p>
                                            <div class="text-start">
                                                <span class="poster_name">By Anshul</span>
                                                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="home_arrow_left"><i class="fas fa-angle-left "></i></span>
                        <!-- <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span> -->
                    </a>

                    <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="home_arrow_right"><i class="fas fa-angle-right "></i></span>
                        <!-- <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span> -->
                    </a>
                </div>
            </div>

        </div>
    </section>



    <!-- Trending Row -->

    <!-- Recently Added Properties -->

    <section class="trending2">
        <div class="container">
            <div class="home_subhead">
                <div class="row justify-content-start align-items-center">
                    <div class="col-md-4 ">
                        <h2 class="home_subhead_text text-center text-start">Recently Added Properties</h2>
                    </div>
                    <div class="col-md-8 text-start">
                        <hr class="home_subhead_line">
                    </div>
                </div>
            </div>


            <div class="row mx-auto my-auto trend_contain">
                <div id="recipeCarousel2" class="carousel carousel2 slide w-100" data-ride="carousel">
                    <div class="inner_container">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item carousel-item2 active">
                                <div class="col-md-4">
                                    <div class="card text-left prop_lists prop_lists2">
                                        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
                                            <p class="prop_lists_add">in Alsanatham for Sale
                                                Within 3-6 months</p>
                                            <p><span>Vaishali Nagar</span></p>

                                            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


                                            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
                                            <p class="prop_lists_rent"><span>Rent</span></p>
                                            <div class="text-start">
                                                <span class="poster_name">By Anshul</span>
                                                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="col-md-4">
                                    <div class="card text-left prop_lists prop_lists2">
                                        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
                                            <p class="prop_lists_add">in Alsanatham for Sale
                                                Within 3-6 months</p>
                                            <p><span>Vaishali Nagar</span></p>

                                            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


                                            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
                                            <p class="prop_lists_rent"><span>Rent</span></p>
                                            <div class="text-start">
                                                <span class="poster_name">By Anshul</span>
                                                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="col-md-4">
                                    <div class="card text-left prop_lists prop_lists2">
                                        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
                                            <p class="prop_lists_add">in Alsanatham for Sale
                                                Within 3-6 months</p>
                                            <p><span>Vaishali Nagar</span></p>

                                            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


                                            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
                                            <p class="prop_lists_rent"><span>Rent</span></p>
                                            <div class="text-start">
                                                <span class="poster_name">By Anshul</span>
                                                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="col-md-4">
                                    <div class="card text-left prop_lists prop_lists2">
                                        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
                                            <p class="prop_lists_add">in Alsanatham for Sale
                                                Within 3-6 months</p>
                                            <p><span>Vaishali Nagar</span></p>

                                            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


                                            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
                                            <p class="prop_lists_rent"><span>Rent</span></p>
                                            <div class="text-start">
                                                <span class="poster_name">By Anshul</span>
                                                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="col-md-4">
                                    <div class="card text-left prop_lists prop_lists2">
                                        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
                                            <p class="prop_lists_add">in Alsanatham for Sale
                                                Within 3-6 months</p>
                                            <p><span>Vaishali Nagar</span></p>

                                            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


                                            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
                                            <p class="prop_lists_rent"><span>Rent</span></p>
                                            <div class="text-start">
                                                <span class="poster_name">By Anshul</span>
                                                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="col-md-4">
                                    <div class="card text-left prop_lists prop_lists2">
                                        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
                                            <p class="prop_lists_add">in Alsanatham for Sale
                                                Within 3-6 months</p>
                                            <p><span>Vaishali Nagar</span></p>

                                            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


                                            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
                                            <p class="prop_lists_rent"><span>Rent</span></p>
                                            <div class="text-start">
                                                <span class="poster_name">By Anshul</span>
                                                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev w-auto" href="#recipeCarousel2" role="button" data-slide="prev">
                        <span class="home_arrow_left"><i class="fas fa-angle-left "></i></span>
                        <!-- <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span> -->
                    </a>

                    <a class="carousel-control-next w-auto" href="#recipeCarousel2" role="button" data-slide="next">
                        <span class="home_arrow_right"><i class="fas fa-angle-right "></i></span>
                        <!-- <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span> -->
                    </a>
                </div>
            </div>
        </div>



        <!-- new Card  -->
        <!-- <?php foreach ($post as $value) { ?>
                              
                                <div class="card text-left prop_lists">
                                    <a href="<?php echo base_url() . 'single_property/fetch/' . $value["property_id"] ?>"><img class="card-img-top" height="188px" src="<?php $img = explode(",", $value["list_images"]);
                                                                                                                                                                        echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt=""></a>
                                    <div class="card-body">
                                        <span class="prop_lists_price">&#8377; <?php echo $value["list_price"] ?></span>
                                        <p class="prop_lists_rent"><span><?php echo $value["list_rent_flag"] == 0 ? "Rent" : "sale" ?></span></p>
                                        <h4 class=" prop_lists_text"><?php echo $value["list_bhk"] == "non-selected" ? $value["list_unit"] . " 180 (sq-ft)" : $value["list_bhk"] . " BHK appartment"  ?> </h4>
                                        <p class="prop_lists_add">in <?php echo $value["list_city"] ?> for <?php echo $value["list_rent_flag"] == 0 ? "Rent" : "sale" ?></p>
                                        <p class="prop_lists_add"><?php echo $value["list_date"] ?> </p>
                                        <p><span class="prop_lists_rent"><?php echo $value["list_name"] ?></span></p>
                                        <div class="text-center">
                                            <a href="tel:+91<?php echo $value["list_mobile"] ?>"> <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact</button></a>
                                        </div>

                                    </div>
                                </div>
                            <?php } ?> -->


        </div>
    </section>

</main>







<script type="text/javascript">
    $("#click").keypress(function() {
        var city = $("#city").val();
        var type = $("#type").val();
        var loc = $("#click").val();
        $.ajax({
            url: "<?php echo base_url() . 'home/search'; ?>",
            type: "post",
            dataType: "json",
            data: {
                city: city,
                type: type,
                loc: loc
            },
        }).done(function(response) {
            console.log(response)
            for (var key in response.msg) {
                $('#searches').html("<option value='" + response.msg[key].list_locality + "'>");
            }

        });
    });
</script>



<script>
    $('#recipeCarousel2').carousel({
        interval: 10000
    })

    $('.carousel2 .carousel-item2').each(function() {
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });


    $('#recipeCarousel').carousel({
        interval: 10000
    })

    $('.carousel .carousel-item').each(function() {
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>



<!-- 
<div class="container">

    <div class="card text-left prop_lists prop_lists2">
        <img class="card-img-top" src="assets/img/homeimgs/flat1.jpg" alt="">
        <div class="card-body">
            <h4 class=" prop_lists_text ">Radhika Appartments</h4>
            <p class="prop_lists_add">in Alsanatham for Sale
                Within 3-6 months</p>
            <p><span>Vaishali Nagar</span></p>

            <h4 class=" prop_lists_text">3 BHK appartment 180 (sq-ft)</h4>


            <span class="prop_lists_price">&#8377; 60,000 (Negotiable)</span>
            <p class="prop_lists_rent"><span>Rent</span></p>
            <div class="text-start">
                <span class="poster_name">By Anshul</span>
                <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button>
            </div>

        </div>
    </div>
</div> -->