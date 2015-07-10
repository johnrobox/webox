
<div class="col-sm-9 page-container">
    <div class="breadcrumb">
        <h4>
            Admin Register 
            <span class="fa fa-arrow-right"></span>
        </h4>
    </div>
    <div class="breadcrumb">
        <?php 
                    echo $this->session->flashdata('admin_user_added_yes');
                    echo $this->session->flashdata('admin_user_added_no');
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-pencil"></span>
                            Register Admin
                        </div>
                        <?php echo form_open(base_url().'admin-register-exec'); ?>
                        <div class="panel-body">
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    
                                    <label for="admin_firstname">Firstname</label>
                                    <small class="text-red">
                                      <?php echo form_error('admin_firstname'); ?>
                                    </small>
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                      <input type="text" name="admin_firstname" id="admin_firstname" class="form-control" placeholder="Enter Firstname" value="<?php echo set_value('admin_firstname') ?>"/>
                                    </div>
                                    
                                    <label for="admin_username">User</label>
                                    <small class="text-red">
                                        <?php echo form_error('admin_username'); ?>
                                    </small>
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                      <input type="text" name="admin_username" id="admin_username" class="form-control" placeholder="Enter Username" value="<?php echo set_value('admin_username'); ?>"/>
                                    </div>
                                    
                                    <label for="admin_password">Password</label>
                                    <small class="text-red">
                                        <?php echo form_error('admin_password'); ?>
                                    </small>
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                      <input type="password" name="admin_password" id="admin_password" placeholder="Enter Password" class="form-control"/>
                                    </div>
                                    
                                    <label for="admin_skype">Skype</label>
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon"><span class="fa fa-skype"></span></span>
                                      <input type="text" name="admin_skype" id="admin_skype" placeholder="Enter skype"class="form-control"/>
                                    </div>
                                    
                                    <label for="admin_gender">Gender</label>
                                    <small class="text-red">
                                        <?php echo form_error('admin_gender'); ?>
                                    </small>
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon">@</span>
                                      <input type="text" name="admin_gender" id="admin_gender" class="form-control" value="<?php echo set_value('admin_gender'); ?>"/>
                                    </div>
                                
                                    
                                    
                                </div>
                                
                                <div class="col-sm-6">
                                    <label for="admin_lastname">Lastname</label>
                                    <small class="text-red">
                                        <?php echo form_error('admin_lastname'); ?>
                                    </small>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                      <input type="text" name="admin_lastname" id="admin_lastname" class="form-control" placeholder="Enter Lastname" value="<?php echo set_value('admin_lastname'); ?>"/>
                                    </div>
                                    
                                    <label for="admin_email">Email</label>
                                    <small class="text-red">
                                        <?php echo form_error('admin_email'); ?>
                                    </small>
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                      <input type="text" name="admin_email" id="admin_email" class="form-control" placeholder="Enter Email"value="<?php echo set_value('admin_email'); ?>"/>
                                    </div>
                                    
                                    <label for="admin_password_confirm">Confirm Password</label>
                                    <small class="text-red">
                                        <?php echo form_error('admin_password_confirm'); ?>
                                    </small>
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                      <input type="password" name="admin_password_confirm" id="admin_password_confirm" placeholder="Confirm password" class="form-control"/>
                                    </div>
                                    
                                    <label for="admin_contact_no">Contact</label>
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                      <input type="text" name="admin_contact_no" id="admin_contact_no" class="form-control" placeholder="Enter Contact number" value="<?php echo set_value('admin_contact_no'); ?>"/>
                                    </div>
                                    
                                
                                    <label for="admin_birthdate">Birthdate</label>
                                    <small class="text-red">
                                        <?php echo form_error('admin_birthdate'); ?>
                                    </small>
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon">@</span>
                                      <input type="text" name="admin_birthdate" id="admin_birthdate" class="form-control" value="<?php echo set_value('admin_birthdate'); ?>"/>
                                    </div>
                                
                                </div>
                            </div>
                           
                       

                           
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary" type="submit">Register</button>
                            <button class="btn btn-default" type="clear">Clear</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
    </div>
</div>
           
