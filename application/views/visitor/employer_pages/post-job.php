
<style>
    .error-color {
        color: red;
    }
</style>
<div class="jumbotron">
    <div class="container-fluid">
        <div class="row">
            
            
            <div class="col-sm-8 col-sm-offset-2">
                <?php echo $this->session->flashdata('CompanyAddedYes'); ?>
                <?php echo $this->session->flashdata('CompanyAddedNo'); ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="fa fa-pencil"></span>
                        Company Information
                    </div>
                    <div class="panel-body">
                        
                        <div class="row">
                            
                            <div class="col-sm-6">
                                <div class="breadcrumb">
                                    <?php echo form_open(base_url().'index.php/EmployerMainPageC/addCompany/'.$location); ?>
                                    
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
                            
                            <div class="col-sm-6">
                                <div class="breadcrumb">
                                    
                                        <div class="form-group">
                                            <label for="companyProfile">Browse company profile</label>
                                            <input type="file" name="companyProfile" class="form-control" />
                                        </div>      
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="panel-footer">
                        
                    </div>
                </div>
            </div>
            
            
            <div class="col-sm-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="fa fa-pencil"></span>
                        Post your job 
                    </div>
                    <?php echo form_open(); ?>
                    <div class="panel-body">
                        
                        <div class="form-group">
                            <label for="jobTitle">Job Title</label>
                            <input type="text" name="jobTitle" id="jobTitle" class="form-control" placeholder="your job title"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="jobLevel">Job Level </label>
                            <select name="jobLevel" id="jobLevel" class="form-control">
                                <option value="ojt">OJT</option>
                                <option value="partime">Partime</option>
                                <option value="entry">Entry Level</option>
                                <option value="0-1">0 - 1 year</option>
                                <option value="1-2">1 - 2 years</option>
                                <option value="2-3">2 - 3 years</option>
                                <option value="3-4">3 - 4 years</option>
                                <option value="4-5">4 - 5 years</option>
                                <option value="5-up">More than 5 years</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="jobDescription">Job Description</label>
                            <textarea id="jobDescription" name="jobDescription" rows="8" class="form-control">

                            </textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="jobQualification">Job Qualification</label>
                            <textarea id="jobQualification" name="jobQualification" rows="8" class="form-control">

                            </textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="numberVacancies">Number of Vacancies</label>
                            <select name="numberVacancies" id="numberVacancies" class="form-control">
                                <option value="">Select number of vacancies</option>
                                <?php for($i = 1 ;$i<50; $i++) { ?>
                                <option  value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
                                <?php } ?>
                                <option value="0">More</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="howToApply">How to Apply</label>
                            <textarea id="howToApply" name="howToApply" rows="8" class="form-control">

                            </textarea>
                        </div>
                        
                    </div>
                    <div class="panel-footer">
                        <input type="reset" class="btn btn-default btn-xs" value="Clear"/>
                        <input type="submit" class="btn btn-primary btn-xs" value="Post"/>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>