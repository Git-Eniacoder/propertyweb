<?php

    // echo '<pre>';
    // print_r($update);
    // echo '</pre>';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../post.css">
    <title>Post Request</title>

    <style>
        .table, th, tr{
            border: 1px solid #000000;
            margin: 1rem 1rem;
        }
    </style>
</head>

<body>

    <h1>Now I am in view</h1>

    <form action="<?php echo isset($update) ? $url['updateinreq'].$update['id'] : $url['inreq']; ?>" method="post">

        <!-- <input type="text" name="property_name" placeholder="pro_name">
        <input type="text" name="property_des" placeholder="pro_name">
        <input type="text" name="property_loc" placeholder="pro_name"> -->

        <div>
            <label for="person">Person</label>
            <select name="person" id="">
                <option value="<?php echo isset($update) ? $update['person'] : "owner"; ?>">Owner</option>
                <option value="<?php echo isset($update) ? $update['person'] : "dealer"; ?>">Dealer</option>
            </select>
        </div>

        <!-- <?php // echo $update ? $update['person'] : "owner" ?> -->
        
        <div>
            <label for="purpose">List property for</label>
            <select name="purpose" id="">
                <option value="<?php echo isset($update) ? $update['purpose'] : "sell";?>">Sell</option>
                <option value="<?php echo isset($update) ? $update['purpose'] : "rent";?>">Rent</option>
            </select>
        </div>


        <div>
        <label for="property_type">Property type</label>
        <select name="property_type" id="">
            <option value="<?php echo isset($update) ? $update['property_type'] : "residential";?>">residential</option>
            <option value="<?php echo isset($update) ? $update['property_type'] : "commercial";?>">commercial</option>
        </select>
        </div>


        <div>
        <label for="property_interest">property interest</label>
        <select name="property_interest" id="">
            <option value="<?php echo isset($update) ? $update['property_interest'] : "appartment_flat";?>">Appartment flat</option>
            <option value="<?php echo isset($update) ? $update['property_interest'] : "residential_land";?>">Residential land</option>
            <option value="<?php echo isset($update) ? $update['property_interest'] : "house/villa";?>">House/Villa</option>
            <option value="<?php echo isset($update) ? $update['property_interest'] : "other";?>">Other</option>
        </select>
        </div>


        <div>
        <label for="bhk">BHK</label>
        <select name="bhk" id="">
            <option value="<?php echo isset($update) ? $update['bhk'] : "1";?>">1</option>
            <option value="<?php echo isset($update) ? $update['bhk'] : "2";?>">2</option>
            <option value="<?php echo isset($update) ? $update['bhk'] : "3";?>">3</option>
            <option value="<?php echo isset($update) ? $update['bhk'] : "3";?>">4</option>
            <option value="<?php echo isset($update) ? $update['bhk'] : "3";?>">5</option>
        </select>
        </div>




        <!-- <div>
            <label for="property_interest">property interest</label>
            <select name="property_interest" id="">
                <option value=""></option>
                <option value="offices">offices</option>
                <option value="retail">retail</option>
                <option value="land">land</option>
                <option value="industry">industry</option>
                <option value="storage">storage</option>
                <option value="hospitality">hospitality</option>
            </select>
        </div> -->

        <div>
            <p>Where Is the property located?</p>
            <div>
                <label for="city">city *</label>
                <input type="text" name="city" value="<?php echo isset($update) ? $update['city'] : "";?>">
            </div>
            <div>
                <label for="" name="locality">Locality *</label>
                <input type="text" name="locality" value="<?php echo isset($update) ? $update['locality'] : "";?>">
            </div>
            <div>
                <label for="" name="project_name">Project Name *</label>
                <input type="text" name="project_name" value="<?php echo isset($update) ? $update['project_name'] : "";?>">
            </div>
        </div>

        <div>
            <p>Description about property</p>
            <div>
                <label for="area">Area *</label>
                <input type="number" name="area" value="<?php echo isset($update) ? $update['area'] : "";?>">

                <label for="area_unit">Area unit</label>
                <select name="area_unit" id="">
                    <option value="<?php echo isset($update) ? $update['area_unit'] : "sq.ft";?>">sq.ft</option>
                    <option value="<?php echo isset($update) ? $update['area_unit'] : "sq.m";?>">sq.m</option>
                    <option value="<?php echo isset($update) ? $update['area_unit'] : "sq.yard";?>">sq.yard</option>
                </select>
            </div>

            <div>
                <label for="bedrooms" name="">Bedrooms *</label>
                <select name="bedrooms" id="">
                    <option value="<?php //echo isset($update) ? $update['bedrooms'] : "1";?>">1</option>
                    <option value="<?php //echo isset($update) ? $update['bedrooms'] : "2";?>">2</option>
                    <option value="<?php //echo isset($update) ? $update['bedrooms'] : "3";?>">3</option>
                    <option value="<?php //echo isset($update) ? $update['bedrooms'] : "4";?>">4</option>
                    <option value="<?php //echo isset($update) ? $update['bedrooms'] : "5";?>">5</option>
                    <option value="<?php //echo isset($update) ? $update['bedrooms'] : "6";?>">6</option>
                </select>
            </div>

            <div>
                <label for="bathrooms" name="">bathrooms *</label>
                <select name="bathrooms" id="">
                    <option value="<?php //echo isset($update) ? $update['bathrooms'] : "1";?>">1</option>
                    <option value="<?php //echo isset($update) ? $update['bathrooms'] : "2";?>">2</option>
                    <option value="<?php //echo isset($update) ? $update['bathrooms'] : "3";?>">3</option>
                    <option value="<?php //echo isset($update) ? $update['bathrooms'] : "4";?>">4</option>
                    <option value="<?php //echo isset($update) ? $update['bathrooms'] : "5";?>">5</option>
                    <option value="<?php //echo isset($update) ? $update['bathrooms'] : "6";?>">6</option>
                </select>
            </div>

            <div>
                <label for="furnished" name="">Furnished *</label>
                <select name="furnished" id="">
                    <option value="<?php // echo isset($update) ? $update['furnished'] : "furnished";?>">furnished</option>
                    <option value="<?php // echo isset($update) ? $update['furnished'] : "semifurnished";?>">semifurnished</option>
                    <option value="3">unfurnished</option>
                </select>
            </div>

            <div>
                <label for="expected_price" name="">Expected Price *</label>
                <input type="number" name="expected_price" id="" <?php echo isset($update) ? $update['price'] : "";?>>
            </div>

        </div>

        <button>submit</button>

    </form>


    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Person</th>
                <th>Purpose</th>
                <th>property_type</th>
                <th>property_interest</th>
                <th>bhk</th>
                <th>city</th>
                <th>locality</th>
                <th>project_name</th>
                <th>area</th>
                <th>area_unit</th>
                <!-- <th>bedrooms</th>
                <th>bathrooms</th>
                <th>furnished</th> -->
                <th>expected_price</th>
                <th>Delete</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($post as $item){  ?>
            <tr>
                <td scope="row"><?php echo $item['id'] ?></td>
                <td scope="row"><?php echo $item['person'] ?></td>
                <td><?php echo $item['purpose'] ?></td>
                <td><?php echo $item['property_type'] ?></td>
                <td><?php echo $item['property_interest'] ?></td>
                <td><?php echo $item['bhk'] ?></td>
                <td><?php echo $item['city'] ?></td>
                <td><?php echo $item['locality'] ?></td>
                <td><?php echo $item['project_name'] ?></td>
                <td><?php echo $item['area'] ?></td>
                <td><?php echo $item['area_unit'] ?></td>
                <td><?php echo $item['price'] ?></td>  
                <td><a href="<?php echo $url['delreq'].$item['id']; ?>">delete</a></td>  
                <td><a href="<?php echo $url['updatereq'].$item['id']; ?>">Update</a></td>  
            </tr>

        <?php } ?>
        </tbody>
    </table>




    <a href="<?php echo $url['getreq'] ?>">get</a>

</body>

</html>