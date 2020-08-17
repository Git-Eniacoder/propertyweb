<?php

// echo "<pre>";
// print_r($searched);
// echo "</pre>";


?>

<section style="margin:0 !important" class="trending top_trend">
   <div class="container">
      <div class="single_subhead">

         <div class="row">

            <?php if ($searched) { ?>
               <h2 class="search_prop_count">Properties for rent in <?= $searched[0]['list_city'] ?></h2>
            <?php } else { ?>
               <h2 class="search_prop_count">No property has found </h2>
            <?php } ?>

         </div>
      </div>
      <!-- Trending Row -->
      <div class="home_row">
         <div class="flex">
            <?php foreach ($searched as $value) { ?>
               <!-- new Card  -->

               <a href="<?php echo base_url() . 'single_property/fetch/' . $value["property_id"] ?>" class="prop_card_link">
                  <div class="card text-left prop_lists prop_lists2 prop_lists_single">

                     <img class="card-img-top" src="<?php $img = explode(",", $value["list_images"]);
                                                      echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt="">
                     <div class="card-body">
                        <span class="prop_lists_price">&#8377; <?php echo $value['list_price'] ?></span>
                        <p class="prop_lists_add"> <?php echo $value['list_property_type'] . ', ' . $value['list_furnished_type']; ?></p>
                        <p><span><?php echo $value['list_locality'] . ', ' . $value['list_city']; ?></span></p>
                        <h4 class=" prop_lists_text"><?php echo ($value['list_property_type'] == 'commercial') ? $value['list_unit'] . ' (sq-ft)' : $value['list_bhk'] . ' BHK appartment' ?></h4>

                        <div class="row justify-content-between align-items-center">
                           <div class="col">
                              <span class="poster_name">By <?php echo $value['list_name'] ?></span>
                           </div>

                           <div class="col text-right">
                              <a href="tel:+91<?php echo $value['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                           </div>

                        </div>

                     </div>
                  </div>
               </a>

            <?php } ?>
         </div>
      </div>
   </div>
</section>




<!-- <?php foreach ($searched as $value) { ?>
   <div class="card text-left prop_lists">
      <a href="<?php echo base_url() . 'single_property/fetch/' . $value["property_id"] ?>"> <img class="card-img-top" height="138px" src="<?php $img = explode(",", $value["list_images"]);
                                                                                                                                             echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt=""></a>
      <div class="card-body">
         <span class="prop_lists_price">&#8377; <?php echo $value["list_price"] ?></span>
         <p class="prop_lists_add"> <?php echo $value['list_property_type'] . ', ' . $value['list_furnished_type']; ?></p>
         <p><span><?php echo $value['list_locality'] . ',' . $value['list_city']; ?></span></p>
         <h4 class=" prop_lists_text"><?php echo ($value['list_property_type'] == 'commercial') ? $value['list_unit'] . ' (sq-ft)' : $value['list_bhk'] . ' BHK appartment' ?></h4>


         <span class="poster_name">By <?php echo $value['list_name'] ?></span>
         <div class="row flex justify-content-between align-items-center" style="margin-top: .5rem;">
            <a href="tel:+91<?php echo $value["list_mobile"] ?>"> <button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact</button></a>
         </div>


      </div>
   </div>
<?php } ?> -->