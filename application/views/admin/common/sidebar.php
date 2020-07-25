<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo base_url();?>admin/dashboard"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="<?php echo base_url();?>admin/core/site_setting"
                                ><div class="sb-nav-link-icon"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                                Site setting
                            </a>
                            <a class="nav-link" href="<?php echo base_url();?>admin/core/social_links"
                                ><div class="sb-nav-link-icon"><i class="fa fa-link" aria-hidden="true"></i></div>
                                Social Links
                            </a>
                            <a class="nav-link" href="<?php echo base_url();?>admin/site_user"
                                ><div class="sb-nav-link-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                                Site Users
                            </a>
                           
                            

                            <!-- <div class="sb-sidenav-menu-heading">View request</div> -->
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseblog" aria-expanded="false" aria-controls="collapseblog"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Request
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseblog" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url();?>admin/post/post_req">Requirements Posted</a>
                                <a class="nav-link" href="<?php echo base_url();?>admin/post/list_req">Listed Property</a>
                            
                            </nav>
                            
                    
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#support" aria-expanded="false" aria-controls="collapseblog"
                                ><div class="sb-nav-link-icon"><i class="fa fa-question-circle"></i></div>
                                Support Ticket
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="support" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url();?>admin/support/payment">Payment Support</a>
                                <a class="nav-link" href="<?php echo base_url();?>admin/support/technical">Technical Support</a>
                                <a class="nav-link" href="<?php echo base_url();?>admin/support/billing">Billing</a>
                            
                            </nav>
                            
                    
                            </div>




                            <div class="sb-sidenav-menu-heading">Page Part</div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url();?>admin/pages/new_page">New Page</a>
                                <a class="nav-link" href="<?php echo base_url();?>admin/pages/all_page">All Pages</a>
                            </nav>
                    
                            </div>
                    
                            
                </nav>
            </div>