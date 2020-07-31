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
                                                <th>Transaction Id</th>
                                                <th>User Id</th>
                                                <th>Amount</th>
                                                <th>Recharge Status</th>
                                                <th>Im Wallet</th>
                                                <th>Date</th>
                                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php foreach($history as $value){ ?>
                                            <tr>
                                            <td><?php echo $value['trans_id'] ;?></td>
                                            <td><?php echo $value['user_id'] ;?></td>
                                            <td>+<?php echo $value['recharge_amount'] ;?></td>
                                            <?php if($value['recharge_status'] == 'Failed'){ ?>
                                            <td class="text-danger"><?php echo $value['recharge_status'] ?></td>
                                            <?php }else if($value['recharge_status'] == 'Request Accepted'){ ?>
                                                <td class="text-warning"><?php echo $value['recharge_status'] ?></td>
                                            <?php }else if($value['recharge_status'] == 'Success'){ ?>
                                                <td class="text-success"><?php echo $value['recharge_status'] ?></td>
                                            <?php } ?>
                                            <td><?php echo $value['imWallet_id'] ;?></td>
                                            <td><?php echo $value['recharge_date'] ;?></td>
                                            </tr>
                                    <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
        
   </div>
</main>



