<?php

// echo "<pre>";
// print_r($searched);
// echo "</pre>";


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
               <div class="card text-left prop_lists">
                  <a href="<?php echo base_url() . 'single_property/fetch/' . $value["property_id"] ?>"> <img class="card-img-top" height="138px" src="<?php $img = explode(",", $value["list_images"]);
                                                                                                                                                         echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt=""></a>
                  <div class="card-body">
                  


                     

                  </div>
               </div>
            <?php } ?>
         </div>
      </div>
   </div>
</section>