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
                            <div class="sb-sidenav-menu-heading">All Pages</div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Legal Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url();?>admin/legal/terms">Terms & Condition</a>
                                <a class="nav-link" href="<?php echo base_url();?>admin/legal/privacy">Privacy Policy</a>
                                <a class="nav-link" href="<?php echo base_url();?>admin/legal/contact">Contact us</a>
                                <a class="nav-link" href="<?php echo base_url();?>admin/legal/about">About us</a>
                            </nav>
                    
                            </div>
                            <div class="sb-sidenav-menu-heading">Management</div>
                            <a class="nav-link" href="charts.html"
                                ><div class="sb-nav-link-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                                Users</a
                            >
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