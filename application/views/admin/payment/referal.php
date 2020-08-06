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
                                                <th>Refered By</th>
                                                <th>User Id</th>
                                                <th>Amount</th>
                                                <th>Refered Date</th>
                                          
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php foreach($history as $value){ if($value['referal_id'] == 'NA') { continue;}?>
                                            <tr>
                                            <td><?php echo $value['referal_id'] ;?></td>
                                            <td><?php echo $value['user_id'] ;?></td>
                                            <td class="text-success">+<?php echo $value['referal_refer'] ;?></td>
                                            <td><?php echo $value['payment_date'] ;?></td>
                                            </tr>
                                    <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
        
   </div>
</main>



