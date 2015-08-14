<div class="alert">
    <div class="panel panel-default">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <div class="panel-heading">
            <span class="fa fa-pencil"></span>
            Company Information
        </div>
        <div class="panel-body">

            <div class="row">

                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <?php echo form_open(base_url().'index.php/EmployerMainPageC/addCompany'); ?>

                        <div class="form-group">
                            <label for="companyName">Company Name</label>
                            <small class="error-color"><?php echo form_error('companyName'); ?></small>
                            <input type="text" name="companyName" id="companyName" class="form-control" placeholder="Enter company name" value="<?php echo set_value('companyName'); ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="companyAddressOne">Address One</label>
                            <small> ( Street Address )</small>
                            <small class="error-color"><?php echo form_error('companyAddressOne'); ?></small>
                            <input type="text" name="companyAddressOne" id="companyAddressOne" class="form-control" placeholder="Enter Address One." value="<?php echo set_value('companyAddressOne'); ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="companyAddressTwo">Address Two</label>
                            <small> ( Barangay / Landmark ) </small>
                            <small class="error-color"><?php echo form_error('companyAddressTwo'); ?></small>
                            <input type="text" name="companyAddressTwo" id="companyAddressTwo" class="form-control" placeholder="Enter Address  Two" value="<?php echo set_value('companyAddressTwo'); ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="companyCity">City</label>
                            <small class="error-color"><?php echo form_error('companyCity'); ?></small>
                            <input type="text" name="companyCity" id="companyCity" class="form-control" placeholder="City address" value="<?php echo set_value('companyCity'); ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="companyProvince">Province / State</label>
                            <small class="error-color"><?php echo form_error('companyProvince'); ?></small>
                            <input type="text" name="companyProvince" id="companyProvince" class="form-control" placeholder="Province address" value="<?php echo set_value('companyProvince'); ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="companyCountry">Country</label>
                            <small class="error-color"><?php echo form_error('companyCountry'); ?></small>
                            <input type="text" name="companyCountry" id="companyCountry" class="form-control" placeholder="Country" value="<?php echo set_value('companyCountry'); ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="companyDescription">Company Description </label>
                            <small class="error-color"><?php echo form_error('companyDescription'); ?></small>
                            <textarea name="companyDescription" id="companyDescription" rows="10" class="form-control">
                                <?php echo set_value('companyDescription'); ?>
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label fo="companyVideo">Embed Company Video</label>
                            <input type="text" name="companyVideo" id="companyVideo" class="form-control" placeholder="Company video" value="<?php echo set_value('companyVideo'); ?>"/>
                        </div>

                            <input type="submit" class="btn btn-primary" value="Add"/>
                            <input type="reset" class="btn btn-default" value="Reset"/>
                            <?php echo form_close(); ?>
                    </div>
                </div>

            </div>

        </div>
        <div class="panel-footer">

        </div>
    </div>
</div>