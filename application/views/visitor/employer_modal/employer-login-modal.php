
<div class="modal modal-fade" id="employerLoginModal" role="modal" tab-index="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                Employer Sign In
            </div>
            <?php echo form_open(base_url().'index.php/EmployerLoginC/index'); ?>
            <div class="modal-body">
                <label for="email">Email</label>
                <div class="input-group input-group-sm">
                    <div class="input-group-addon">
                        <span class="fa fa-user"></span>
                    </div>
                    <input type="email" name="email" id="email" class="form-control" required="" placeholder="Enter your email"/>
                </div>
                <label for="password">Password</label>
                <div class="input-group input-group-sm">
                    <div class="input-group-addon">
                        <span class="fa fa-lock"></span>
                    </div>
                    <input type="password" name="password" id="password" class="form-control" required="" placeholder="Enter your password"/>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-xs" type="submit">Login</button>
                <hr>
                <span class="text-center">
                    Dont have account ? 
                    <a href="<?php echo base_url(); ?>index.php/EmployerRegisterController">Register Here!</a>
                </span>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>