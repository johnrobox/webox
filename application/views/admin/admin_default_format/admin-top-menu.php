


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-brand">Jobseeker</div> 

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-user"></span>
                  <?php echo $this->session->userdata('AdminUsername'); ?>
                  <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url();?>index.php/AdminSettingController">Settings</a></li>
                <li class="divider"></li>
                <li><a href="#adminLogout" data-toggle="modal">Logout</a></li>
              </ul>
            </li>
          </ul>
    </div>
</nav>
        
    <div class="row" style="margin-top:50px;">