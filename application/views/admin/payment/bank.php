<style>
a.disabled {
  pointer-events: none;
  cursor: default;
}</style>
<div id="layoutSidenav_content">
<main>
   <div class="container-fluid">
   <div class="card m-4 border-0">
   <span id="response" class="text-center"></span>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table " id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>User id</th>
                                                <th>Account Number</th>
                                                <th>Account Ifsc</th>
                                                <th>Holder Name</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php foreach($history as $value){ ?>
                                            <tr>
                                            <td><?php echo $value['user_id'] ;?></td>
                                            <td><?php echo $value['account_number'] ;?></td>
                                            <td><?php echo $value['account_ifsc'] ;?></td>
                                            <td><?php echo $value['account_name'] ;?></td>
                                            <td><?php echo ($value['account_status'] == false)? "<span class='text-white badge badge-warning'>Not Transfered</span>" : "<span class='text-white badge badge-success'>Transfered</span>" ;?></td>
                                            <td><?php echo $value['account_date'] ;?></td>
                                            <td><a class="btn btn-success <?php echo ($value['account_status'] == false)? "" : "disabled" ;?>" href="<?php echo base_url().'admin/payment/bank/change/'.$value['account_id'] ?>">Change Status</a></td>
                                            </tr>
                                    <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
        
   </div>
</main>



