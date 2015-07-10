
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="index, follow"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="application-name" content="Webox : Easy job post and hunting"/>
        <meta name="keywords" content="" />
        <meta name="google-site-verification" content="FfrIYMK3Mo3WbWe05Wi4hSkFZ2WncJyDTma0x42JljE" />
        <meta name="description" content="Easy job searh and posting in Bacolod, Cagayan de Oro, Cebu, Davao, Iloilo. We are now lunch our site with free jobposting for the employeer and easily search for the people who very in need job."/>
        <title>Webox : Easy job post and hunting</title>
        <link href="/user/favicon.ico?v=1" type="image/x-icon" rel="icon" />
        <link href="/user/favicon.ico?v=1" type="image/x-icon" rel="shortcut icon" />
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css"/>

        
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        
        
    </head>
    <body style="background: rgba(245, 245, 245, 1);">
        
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Online Jobseek</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About the site</a></li>
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employer <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Employer Login</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url();?>employer-register">Employer Register</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Applicant <span class="caret"></span></a>
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
        
        <div class="container-fluid" style="margin-top: 50px;x">
            <div class="breadcrumb">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 style="font-size: 75px; font-weight: bold; color:yellowgreen;">JOBS HERE!</h1>
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php echo base_url();?>img/header_logo.png"/>
                    </div>
                </div>
            </div>
            <h1>
                <?php echo $this->session->flashdata('employer_registration_success'); ?>
            </h1>
            <div class="breadcrumb">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="alert alert-success">
                            <a href="" class="btn btn-info btn-block" style="font-size:20px;">Bacolod</a>
                            <a href="" class="btn btn-info btn-block" style="font-size:20px;">Cagayan de Oro</a>
                            <a href="" class="btn btn-info btn-block" style="font-size:20px;">Cebu</a>
                            <a href="" class="btn btn-info btn-block" style="font-size:20px;">Davao</a>
                            <a href="" class="btn btn-info btn-block" style="font-size:20px;">Iloilo</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php echo base_url();?>img/left_content.png"/>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>