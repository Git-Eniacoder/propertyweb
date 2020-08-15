<?php

echo "<pre>";
print_r($searched);
echo "</pre>";


?>

<section style="margin:0 !important" class="trending top_trend">
   <div class="container">
      <div class="single_subhead">
         <!-- <div class="row justify-content-start align-items-center">
            <div class="col-sm-3 ">
               <h2 class="home_subhead_text text-center text-start">Searched Properties</h2>
            </div>
            <div class="col-sm-9">
               <hr class="home_subhead_line">
            </div>
         </div> -->

         <div class="row">

            <?php if (!isset($searched)) { ?>
               <h2 class="search_prop_count">No property has found</h2>
            <?php } else { ?>
               <h2 class="search_prop_count">Properties For Rent in <?= $searched[0]['list_city'] ?></h2>
            <?php } ?>
            
         </div>
      </div>
      <!-- Trending Row -->
      <div class="home_row">
         <div class="flex">
            <?php foreach ($searched as $value) { ?>
               <!-- new Card  -->
               <div class="card text-left prop_lists">
                  <a href="<?php echo base_url() . 'single_property/fetch/' . $value["property_id"] ?>"> <img class="card-img-top" height="138px" src="<?php $img = explode(",", $value["list_images"]);
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
            <?php } ?>
         </div>
      </div>
   </div>
</section>