<?php 
function total($array,$index){
    $total=0;
    foreach($array as $value){
        $total=$total+$value[$index];
    }
    return $total;
}?>
            <div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <!-- <div class="text-danger text-center">
                            <h1>Credentials of this admin panel</h1>
                            <h3 class="text-success">Username : adminpanel</h3>
                            <h3 class="text-success">Password : @Eniacoder1</h3>
                            <h3 class="text-success">login Url : <a href="http://13.233.17.47/phpmyadmin">Phpmyadmin</a></h3>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Total User : <?php echo count($all_data); ?></div>
                                    <!-- <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div> -->
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Total Recharge wallet amount:<?php echo total($all_data,"recharge_wallet"); ?> &#x20b9;</div>
                                    <!-- <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div> -->
                                </div>
                            </div>
                            
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-line mr-1"></i>Total Referal wallet amount: <?php echo total($all_data,"refferal_wallet"); ?> &#x20b9;</div>
                                    <!-- <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div> -->
                                </div>
                            </div>
                            
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-pie mr-1"></i>Total field wallet amount: <?php echo total($all_data,"filed_wallet"); ?> &#x20b9;</div>
                                    <!-- <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div> -->
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fa fa-users mr-1" aria-hidden="true"></i>Total referal: <?php echo total($all_data,"total_referal");?></div>
                                    <!-- <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
