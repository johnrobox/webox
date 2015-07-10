<?php
    /*
     * Author : Webox Team
     * Date   : June 27, 2015
     * Place  : Boarding House   
     */
?>

<script src="<?php echo base_url() ?>js/admin-script/admin-login.js"></script>


<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
                <?php echo form_open(); ?>

                    <div class="form-group">
                        <div id="errorReturn" style="background-color: rgb(250, 90, 14); border-radius: 5px;" class="text-center"></div>
                    </div>

                    <div class="form-group">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control"/>
                        </div>
                    </div>
                    
                    <input type="button" class="btn btn-primary" id="loginSubmit" value="Login"/>
                    <input type="reset" class="btn btn-default" value="Clear"/>
                    <hr>
                    <a href="" class="text-center">Help! I forgot my password ?</a>

                    <?php echo form_close(); ?>
                </div>
        
        </div>
    </div>
</div>



