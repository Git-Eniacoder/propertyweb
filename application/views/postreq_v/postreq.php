<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Request</title>
</head>

<body>

    <h1>Now I am in view</h1>

    <form action="<?php echo $url['getreq']; ?>" method="post">

        <!-- <input type="text" name="property_name" placeholder="pro_name">
        <input type="text" name="property_des" placeholder="pro_name">
        <input type="text" name="property_loc" placeholder="pro_name"> -->

        <div>
            <label for="person">Person</label>
            <select name="person" id="">
                <option value=""></option>
                <option value="owner">Owner</option>
                <option value="dealer">Dealer</option>
            </select>
        </div>

        <div>
            <label for="purpose">List property for</label>
            <select name="purpose" id="">
                <option value=""></option>
                <option value="sell">Sell</option>
                <option value="rent">Rent</option>
            </select>
        </div>



        <label for="type_residential">residential</label>
        <select name="type_residential" id="">
            <option value=""></option>
            <option value="appartment_flat">Appartment flat</option>
            <option value="residential_land">Residential land</option>
            <option value="house/villa">House/Villa</option>
            <option value="other">Other</option>
        </select>
        </div>


        <div>
            <label for="type_commercial">commercial</label>
            <select name="type_commercial" id="">
                <option value=""></option>
                <option value="offices">offices</option>
                <option value="retail">retail</option>
                <option value="land">land</option>
                <option value="industry">industry</option>
                <option value="storage">storage</option>
                <option value="hospitality">hospitality</option>
            </select>
        </div>

        <div>
            <p>Where Is the property located?</p>

            <div>
                <label for="city">city *</label>
                <input type="text" name="city">
            </div>

            <div>
                <label for="" name="project_name">Project Name *</label>
                <input type="text" name="project_name">
            </div>

            <div>
                <label for="" name="locality">Locality *</label>
                <input type="text" name="locality">
            </div>

        </div>

        <div>
            <p>Description about property</p>

            <div>
                <label for="area">Area *</label>
                <input type="number" name="area">

                <label for="area_unit">Area unit</label>
                <select name="area_unit" id="">
                    <option value=""></option>
                    <option value="sq.ft">sq.ft</option>
                    <option value="sq.m">sq.m</option>
                    <option value="sq.yard">sq.yard</option>
                </select>
            </div>

            <div>
                <label for="bedrooms" name="">Bedrooms *</label>
                <select name="bedrooms" id="">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <div>
                <label for="bathrooms" name="">bathrooms *</label>
                <select name="bathrooms" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <div>
                <label for="furnished" name="">Furnished *</label>
                <select name="furnished" id="">
                    <option value="1">furnished</option>
                    <option value="2">semifurnished</option>
                    <option value="3">unfurnished</option>
                </select>
            </div>

            <div>
                <label for="expected_price" name="">Expected Price *</label>
                <input type="number" name="expected_price" id="">
            </div>

        </div>





        <button>submit</button>

    </form>

</body>

</html>