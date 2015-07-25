<?php
    /*
     * Author : Webox Team
     * Date   : June 27, 2015
     * Place  : Boarding House   
     */
?>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <?php echo $this->session->flashdata('InvalidLogin'); ?>
                <?php echo form_open(base_url().'index.php/AdminLoginController/loginExec'); ?>

                    <div class="form-group">
                        <div id="errorReturn" style="background-color: rgb(250, 90, 14); border-radius: 5px;" class="text-center"></div>
                    </div>

                    <div class="form-group">
                        <?php if (form_error('username') != null){ ?>
                            <small style="color:red"><?php echo form_error('username'); ?></small>
                        <?php } ?>
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username" value="<?php echo set_value('username'); ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <?php if ( form_error('password') != null) { ?>
                            <small style="color:red"><?php echo form_error('password'); ?></small>
                        <?php } ?>
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control" value="<?php echo set_value('password'); ?>"/>
                        </div>
                    </div>
                    
                    <input type="submit" class="btn btn-primary"  value="Login"/>
                    <input type="reset" class="btn btn-default" value="Clear"/>
                    <hr>
                    <a href="" class="text-center">Help! I forgot my password ?</a>

                    <?php echo form_close(); ?>
                </div>
        
        </div>
    </div>
</div>



