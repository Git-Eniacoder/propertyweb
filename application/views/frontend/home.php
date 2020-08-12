<?php
  if(isset($_GET["id"]))
  {
    $refer_id=$_GET["id"];
    setcookie('referid',$_GET["id"],time() + (86400 * 30), "/");
  }
  else if(isset($_COOKIE['referid'])){
    $refer_id=$_COOKIE['referid'];
  }
  else
  {
    $refer_id=NULL;
  
  }
?>
<style>
    .mobi {
        display: none;
    }

    @media screen and (max-width: 770px) {
        .mobi {
            display: block;
            margin: 0px !important;
        }

        .desk {
            display: none;
        }
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
                        <?php if ($status == false) { ?>
                            <a href="" data-toggle="modal" data-target="#login" class="hero_ser_link">
                            <?php } else { ?>
                                <a href="<?php echo $url['recharge']; ?>" class="hero_ser_link">
                                <?php } ?>
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
    <section class="trending top_trend desk">
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
            <div class="row mx-auto my-auto trend_contain">
                <div id="trending" class="carousel carousel2 slide w-100" data-ride="carousel">
                    <div class="inner_container">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item carousel-item2 justify-content-center active">
                                <div class="row justify-content-center">
                                    <?php for ($i = 0; $i < 3; $i++) {
                                        if (count($property) <= $i) {
                                            break;
                                        }
                                    ?>
                                        <div class="col-md-4">
                                            <div class="card text-left prop_lists prop_lists2">
                                                <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>"> <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]);
                                                                                                                                                                                echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt=""></a>
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="row justify-content-center">
                                    <?php for ($i = 0; $i < 3; $i++) {
                                        if (count($property) <= $i) {
                                            break;
                                        }
                                    ?>
                                        <div class="col-md-4">
                                            <div class="card text-left prop_lists prop_lists2">
                                                <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>"> <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]);
                                                                                                                                                                                echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt=""></a>
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="row justify-content-center">
                                    <?php for ($i = 3; $i < 6; $i++) {
                                        if (count($property) <= $i) {
                                            break;
                                        }
                                    ?>
                                        <div class="col-md-4">
                                            <div class="card text-left prop_lists prop_lists2">
                                                <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>"> <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]);
                                                                                                                                                                                echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt=""></a>
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377;<?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <a class="carousel-control-prev w-auto" href="#trending" role="button" data-slide="prev">

                        <div class="home_arrow_new hrn_left">
                            <span class="home_arrow_left"><i class="fas fa-angle-left "></i></span>
                        </div>


                    </a>

                    <a class="carousel-control-next w-auto" href="#trending" role="button" data-slide="next">
                    <div class="home_arrow_new hrn_right">
                        <span class="home_arrow_right"><i class="fas fa-angle-right "></i></span>
                    </div>

                    </a>
                </div>
            </div>

        </div>
    </section>



    <section class="trending top_trend mobi">
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

            <div class="row mx-auto my-auto trend_contain">
                <div id="trendig" class="carousel carousel2 slide w-100" data-ride="carousel">
                    <div class="inner_container">
                        <div class="carousel-inner w-100" role="listbox">
                            <?php for ($i = 0; $i < 5; $i++) {
                                if (count($property) <= $i) {
                                    break;
                                }
                            ?>
                                <div class="carousel-item carousel-item2 justify-content-center <?php echo ($i == 0) ? 'active' : '' ?>">
                                    <div class="row justify-content-center">

                                        <div class="col-md-4">
                                            <div class="card text-left prop_lists prop_lists2">
                                                <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>"> <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]);
                                                                                                                                                                                echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt=""></a>
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <a class="carousel-control-prev w-auto" href="#trendig" role="button" data-slide="prev">
                    <div class="home_arrow_new hrn_left">
                        <span class="home_arrow_left"><i class="fas fa-angle-left "></i></span>
                    </div>

                    </a>

                    <a class="carousel-control-next w-auto" href="#trendig" role="button" data-slide="next">
                    <div class="home_arrow_new hrn_right">
                        <span class="home_arrow_right"><i class="fas fa-angle-right "></i></span>
                    </div>

                    </a>
                </div>
            </div>

        </div>
    </section>




    <!-- Trending Row -->

    <!-- Recently Added Properties -->

    <section class="trending2 desk">
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
                <div id="recent" class="carousel carousel2 slide w-100" data-ride="carousel">
                    <div class="inner_container">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item carousel-item2 justify-content-center active">
                                <div class="row justify-content-center">
                                    <?php for ($i = 0; $i < 3; $i++) {
                                        if (count($property) <= $i) {
                                            break;
                                        }
                                    ?>
                                        <div class="col-md-4">
                                            <div class="card text-left prop_lists prop_lists2">
                                                <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>"> <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]);
                                                                                                                                                                                echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt=""></a>
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="row justify-content-center">
                                    <?php for ($i = 0; $i < 3; $i++) {
                                        if (count($property) <= $i) {
                                            break;
                                        }
                                    ?>
                                        <div class="col-md-4">
                                            <div class="card text-left prop_lists prop_lists2">
                                                <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>"> <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]);
                                                                                                                                                                                echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt=""></a>
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="row justify-content-center">
                                    <?php for ($i = 3; $i < 6; $i++) {
                                        if (count($property) <= $i) {
                                            break;
                                        }
                                    ?>
                                        <div class="col-md-4">
                                            <div class="card text-left prop_lists prop_lists2">
                                                <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>"> <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]);
                                                                                                                                                                                echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt=""></a>
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev w-auto" href="#recent" role="button" data-slide="prev">
                    <div class="home_arrow_new hrn_left">
                        <span class="home_arrow_left"><i class="fas fa-angle-left "></i></span>
                    </div>

                    </a>

                    <a class="carousel-control-next w-auto" href="#recent" role="button" data-slide="next">
                    <div class="home_arrow_new hrn_right">
                        <span class="home_arrow_right"><i class="fas fa-angle-right "></i></span>
                    </div>

                    </a>
                </div>
            </div>
        </div>

        </div>
    </section>

    <section class="trending2 mobi">
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
                <div id="recen" class="carousel carousel2 slide w-100" data-ride="carousel">
                    <div class="inner_container">
                        <div class="carousel-inner w-100" role="listbox">
                            <?php for ($i = 0; $i < 5; $i++) {
                                if (count($property) <= $i) {
                                    break;
                                }
                            ?>
                                <div class="carousel-item carousel-item2 justify-content-center <?php echo ($i == 0) ? 'active' : '' ?>">
                                    <div class="row justify-content-center">

                                        <div class="col-md-4">
                                            <div class="card text-left prop_lists prop_lists2">
                                                <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>"> <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]);
                                                                                                                                                                                echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt=""></a>
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <a class="carousel-control-prev w-auto" href="#recen" role="button" data-slide="prev">
                    <div class="home_arrow_new hrn_left">
                        <span class="home_arrow_left"><i class="fas fa-angle-left "></i></span>
                    </div>

                    </a>

                    <a class="carousel-control-next w-auto" href="#recen" role="button" data-slide="next">
                    <div class="home_arrow_new hrn_right">
                        <span class="home_arrow_right"><i class="fas fa-angle-right "></i></span>
                    </div>

                    </a>
                </div>
            </div>
        </div>

        </div>
    </section>

</main>




<script>
    $('.carousel').carousel({
        interval: false,
    });
</script>


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