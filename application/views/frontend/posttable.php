<!-- PostTable  -->

  <div class="posttable">
    <div class="container">

      <div class="row">
        <div class="col-md-8 ">
          <div class="form-head">
            <h3>All Properties</h3>
            <hr class="style1">
          </div>

        </div>
        <div class="col-md-4">

        </div>
      </div>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No.</th>
            <th>City</th>
            <th>Description</th>
            <th>Rent</th>
            <th>BHK</th>
            <th>Forwhom</th>
            <th>Delete</th>
            <th>Update</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($post as $item) {  ?>
            <tr>
              <td><?php echo $item['id']; ?></td>
              <td><?php echo $item['city']; ?> </td>
              <td><?php echo $item['description']; ?> </td>
              <td><?php echo $item['rent']; ?></td>
              <td><?php echo $item['bhk']; ?></td>
              <td><?php echo $item['forwhom']; ?></td>
              <td><a href="<?php  echo $url['delreq'] . $item['id']; ?>">delete</a></td>
              <td><a href="<?php  echo $url['updatereq'] . $item['id']; ?>">Update</a></td>
            </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>

<!-- End of PostTable  -->

