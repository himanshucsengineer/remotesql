<?php
  if(isset($_SESSION["name"]))
  {
    $tag=$_SESSION["name"];  
    $options = ' <a class="dropdown-item" href="'. base_url().'dashboard" ">Dashboard</a>
                <a class="dropdown-item" href="'. base_url().'indexController/logout" ">Logout</a>';
  }
  else{
    $tag="My Account";
    $options = ' <a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginmodal">Login</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#signupmodal">Sign Up</a>';
  }
?>
        <header class="head">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                  <div class="logo">
                    <a class="custom-logo-link " rel="home" href="#">
                      <img width="133" height="55" src="<?php echo $url['image'];?>/headlogo.svg" alt="Eniacoder" class="custom-logo" >
                    </a>
                  </div>
                  <button class="navbar-toggler nav-dark bbb" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                  </button>
                  <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
                    <ul id="nav" class="navbar-nav ml-auto ">
                      <li class=" nav-item">
                        <a title="Home" href="<?php echo base_url();?>" class="nav-link">
                          Home
                        </a>
                      </li>
                      <li class=" nav-item">
                        <a title="About Us" href="<?php echo base_url();?>about" class="nav-link">
                          About Us
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
                          Dropdown link<img src="assets/img/user/servicearrow.svg" width="15px" style="margin-left: 4px;">
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Link 1</a>
                          <a class="dropdown-item" href="#">Link 2</a>
                          <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                      </li>
                      
                      
                      <li   class="  nav-item">
                        <a title="Contact Us" href="<?php echo base_url();?>contact" class="nav-link">
                          Contact Us
                        </a>
                      </li>
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
                          <?php echo $tag;?><img src="assets/img/user/servicearrow.svg" width="15px" style="margin-left: 4px;">
                        </a>
                        <div class="dropdown-menu">
                          <?php echo $options; ?>
                        </div>
                      </li>
                      <li   class="  nav-item">
                        <button  >Let's Start</button>
                        
                      </li>
                    </ul>
                  </div>
                </nav> <!-- navbar -->
              </div>
            </div> <!-- row -->
          </div> <!-- container -->
        </header>