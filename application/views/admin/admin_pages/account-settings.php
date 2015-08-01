<div class="col-sm-9">
    
    <div class="breadcrumb">
        <h4>            <?php echo $this->session->flashdata('AdminUpdate'); ?>

        Admin Settings 
        <span class="fa fa-arrow-right"></span>
        </h4>
    </div>
    
    <div class="breadcrumb">
        <?php echo form_open(base_url().'index.php/AdminSettingController/adminSettingExec'); ?>
        Firstname
        <?php echo form_error('adminFirstname'); ?>
        <input type="text" name="adminFirstname" value="<?php echo $adminFirstname;?>"/>
        
        <br>
        Lastname
        <?php echo form_error('adminLastname'); ?>
        <input type="text" name="adminLastname" value="<?php echo $adminLastname;?>"/>
        
        <br>
        Email
        <?php echo form_error('adminEmail'); ?>
        <input type="text" name="adminEmail" value="<?php echo $adminEmail; ?>"/>
        
        <br>
        Skype
        <input type="text" name="adminSkype" value="<?php echo $adminSkype; ?>" />
        
        <br>
        Contact No
        <?php echo form_error('adminContactNo'); ?>
        <input type="text" name="adminContactNo" value="<?php echo $adminContactNo; ?>" />
        
        <br>
        Gender
        <select name="adminGender">
            <?php if($adminGender == 1) { ?>
                <option value="1">Male</option>
                <option value="2">Female</option>
            <?php } else { ?>
                <option value="2">Female</option>
                <option value="1">Male</option>
            <?php } ?>
        </select>
        
        <br>
        Birthdate
        <?php echo form_error('adminBirthDate'); ?>
        <input type="text" name="adminBirthDate" value="<?php echo $adminBirthDate; ?>" />
               
        <input type="submit" value="Update"/>    
        <?php echo form_close(); ?>

    </div>
    
</div>