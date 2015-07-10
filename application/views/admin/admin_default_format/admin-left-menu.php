                <div class="left-menu col-sm-3">
                    <div class="row" style="margin:10px 0px 10px 0px; background-color: #ddd; border-radius:5px;">
                        <div class="col-xs-6" style="">
                            <div style="padding:5px 0px 5px 0px;">
                            <image src="<?php echo base_url();?>img/user/user.png" class="img-responsive img-circle">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div style="padding-top:10px; font-size: 17px;font-weight: bold;">
                            <?php echo ucwords(strtolower($this->session->userdata('AdminFirstname'))); ?>
                            <?php echo ucwords(strtolower($this->session->userdata('AdminLastname')));?>
                            <span class="fa fa-check-circle" style="color:green;"></span>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                            <li class="li-link <?php if($title=='Admin Homepage') echo 'active'; ?>">
                                <a href="<?php echo base_url().'admin-homepage'; ?>">
                                    <span class="fa fa-laptop"></span> Dashboard
                                </a>
                            </li>
                            <li class="li-link"><a href="#">Profile</a></li>
                            <li class="li-link"><a href="#">Messages</a></li>
                            <li class="li-link"><a href="#"></a></li>
                            <li class="li-link"><a href="#"></a></li>
                            <li class="li-link"><a href="#"></a></li>
                            <li class="li-link"><a href="#"></a></li>
                            <li class="li-link <?php if($title=='Admin Register') echo 'active'; ?>">
                                <a href="<?php echo base_url().'admin-register'; ?>">
                                    <span class="fa fa-user"></span> Add User
                                </a>
                            </li>
                        </ul>
                </div>