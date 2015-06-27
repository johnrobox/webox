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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        <span class="glyphicon glyphicon-pencil"></span>
                        Administrator Login
                    </h4>
                </div>
                <?php echo form_open(); ?>
                <div class="panel-body">
                    <div id="errorReturn"></div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control"/>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" id="loginSubmit" class="btn btn-primary">Login</button>
                    <button type="reset" class="btn btn-default">Clear</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>



