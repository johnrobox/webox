
<div class="container">
    <div class="breadcrumb">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Register Admin</div>
                    <?php echo form_open(); ?>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="admin_firstname">Firstname</label>
                            <input type="text" name="admin_firstname" id="admin_firstname" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="admin_lastname">Lastname</label>
                            <input type="text" name="admin_lastname" id="admin_firstname" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="admin_username">User</label>
                            <input type="text" name="admin_username" id="admin_username" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="admin_password">Password</label>
                            <input type="text" name="admin_password" id="admin_password" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="admin_password_confirm">Confirm Password</label>
                            <input type="text" name="admin_password_confirm" id="admin_password_confirm" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="admin_email">Email</label>
                            <input type="text" name="admin_email" id="admin_email" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="admin_skype">Skype</label>
                            <input type="text" name="admin_skype" id="admin_skype" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="admin_contact_no">Contact</label>
                            <input type="text" name="admin_contact_no" id="admin_contact_no" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="admin_gender">Gender</label>
                            <input type="text" name="admin_gender" id="admin_gender" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="admin_birthdate">Birthdate</label>
                            <input type="text" name="admin_birthdate" id="admin_birthdate" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="admin_profile">Profile</label>
                            <input type="text" name="admin_profile" id="admin_profile" class="form-control"/>
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
    </div>
</div>