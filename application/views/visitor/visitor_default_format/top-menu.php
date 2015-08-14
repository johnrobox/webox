<nav class="navbar navbar-inverse" role="navigation">
  <div style="" class="container-fluid"> <!-- background-color: #365f9c; -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="color: #fff;" href="#">Online Jobseek</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#" style="color: #fff;" >About the site</a></li>
<!--        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group input-group-sm">
          <input type="text" class="form-control" placeholder="Seach job quickly.">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" style="color: #fff;" data-toggle="dropdown">Employer <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#employerLoginModal" data-toggle="modal">Employer Login</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url();?>index.php/EmployerRegisterController">Employer Register</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" style="color: #fff;" data-toggle="dropdown">I am a Job Seeker <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Applicant Login</a></li>
            <li class="divider"></li>
            <li><a href="#">Applicant Register</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>