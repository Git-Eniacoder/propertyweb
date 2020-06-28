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
                            <div class="sb-sidenav-menu-heading">Blog Part</div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseblog" aria-expanded="false" aria-controls="collapseblog"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Blog
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseblog" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url();?>admin/blog/new_blog">New Post</a>
                                <a class="nav-link" href="<?php echo base_url();?>admin/blog/all_blog">All Posts</a>
                                <a class="nav-link" href="<?php echo base_url();?>admin/blog/cat_blog">Categories</a>
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
                            <div class="sb-sidenav-menu-heading">Management</div>
                            
                            <a class="nav-link collapsed" href="charts.html" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                                Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url();?>admin/Management/admin_management">Admin</a>
                                <a class="nav-link" href="<?php echo base_url();?>admin/Management/user_management">User</a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseUsers" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url();?>admin/users/all_user">All Users</a>
                                <a class="nav-link" href="<?php echo base_url();?>admin/users/add_new">Add New</a>
                                <a class="nav-link" href="<?php echo base_url();?>admin/users/your_profile">Your Profile</a>
                            </nav>
                            </div>
                            <!-- <a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables</a
                            > -->
                        </div>
                    </div>
                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div> -->
                </nav>
            </div>