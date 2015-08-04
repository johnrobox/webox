<nav class="navbar navbar-default" role="navigation">
  <div style="background-color: #365f9c;" class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="color: #fff;" class="navbar-brand" href="#">Online Jobseek</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a style="color: #fff;" href="<?php echo base_url(); ?>">Home</a></li>
        <li><a style="color: #fff;" href="#">About the site</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white">
              <span class="fa fa-user"> </span>
              <?php echo ucwords(strtolower($this->session->userdata('EmployerFirstname'))); ?>
              <?php echo ucwords(strtolower($this->session->userdata('EmployerLastname'))); ?>
              <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li>
                <a href="<?php echo base_url();?>index.php/EmployerMainPageC/settings" data-toggle="modal">
                    <span class="fa fa-asterisk"></span>
                    Settings
                </a>
            </li>
            <li>
                <a href="#employerLogout" data-toggle="modal">
                    <span class="fa fa-long-arrow-right"></span>
                    Logout
                </a>
            </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>