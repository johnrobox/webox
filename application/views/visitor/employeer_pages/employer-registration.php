
<div class="row">
    <div class="col-sm-6 col-sm-offset-2">
        <div style="background-color: #fff; border: 1px solid #ddd; padding: 5px; margin-bottom: 10px;font-size: 13px; font-weight: bold; border-radius:10px;">
            <div class="text-center">STEP 1</div>
        </div>
        <?php echo form_open(base_url().'register-employer-exec'); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                Employer Registration Panel
            </div>
            <div class="panel-body">
                <div ng-app="">
                <label for="employerEmail">Email</label>
                <small class="text-red"><?php echo form_error('employerEmail');?></small>
                <div class="input-group input-group-sm">
                    <div class="input-group-addon">
                        <span class="fa fa-user"></span>
                    </div>
                    <input type="email" name="employerEmail" id="employerEmail" class="form-control" placeholder="Enter your Email."/>
                </div>
                
                <br>
                
                <label for="employerPassword">Password</label>
                <small class="text-red"><?php echo form_error('employerPassword');?></small>
                <div class="input-group input-group-sm">
                    <div class="input-group-addon">
                        <span class="fa fa-user"></span>
                    </div>
                    <input type="password" name="employerPassword" id="employerPassword" class="form-control" placeholder="Enter your password."/>
                </div>
                
                <br>
                
                <label for="employerPasswordConfirm">Confirm Password</label>
                <small class="text-red"><?php echo form_error('employerPasswordConfirm'); ?></small>
                <div class="input-group input-group-sm">
                    <div class="input-group-addon">
                        <span class="fa fa-user"></span>
                    </div>
                    <input type="password" name="employerPasswordConfirm" id="employerPasswordConfirm" class="form-control" placeholder="Confirm your desire password."/>
                </div>
                
                <br>
                
                <label for="employerFirstname">Firstname</label>
                <small class="text-red"><?php echo form_error('employerFirstname'); ?></small>
                <div class="input-group input-group-sm">
                    <div class="input-group-addon">
                        <span class="fa fa-user"></span>
                    </div>
                    <input type="text" name="employerFirstname" id="employerFirstname" class="form-control" placeholder="Enter your firstname."/>
                </div>
                
                <br>
                
                <label for="employerLastname">Lastname</label>
                <small class="text-red"><?php echo form_error('employerLastname'); ?></small>
                <div class="input-group input-group-sm">
                    <div class="input-group-addon">
                        <span class="fa fa-user"></span>
                    </div>
                    <input type="text" name="employerLastname" id="employerLastname" class="form-control" placeholder="Enter your Lastname"/>
                </div>
                
                <br>
                
                <label for="employerGender">Gender</label>
                <small class="text-red"><?php echo form_error('employerGender'); ?></small>
                    Male
                    <input type="radio" name="employerGender" value="1"/>
                    Female
                    <input type="radio" name="employerGender" value="2"/>
                
                    <hr>
                
                <label for="employerBirthdate">Birthdate</label>
                <table>
                    <tr>
                        <td>
                            <small class="text-red"><?php echo form_error('employerBirthdateM');?></small>
                            <div ng-controller="monthController"> 
                               <select name="employerBirthdateM"  class="form-control input-group-sm">
                               <?php if(set_value('voters_birth_month')!=''){ ?>
                                    <option value="<?php echo set_value('voters_birth_month');?>"><?php echo set_value('voters_birth_month');?></option>
                               <?php }else { ?>
                                    <option value="">Select month . . .</option>
                               <?php } ?>
                                    <option value="{{ y.name }}" ng-repeat="y in month">
                                        {{ y.name }}
                                    </option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <small class="text-red"><?php echo form_error('employerBirthdateD');?></small>
                            <select name="employerBirthdateD" class="form-control">
                                <option value="">Select Day</option>
                                <?php for($i=1;$i<=31;$i++){ ?>
                                <option value="<?php echo $i;?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td>
                            <small class="text-red"><?php echo form_error('employerBirthdateY');?></small>
                            <select name="employerBirthdateY" class="form-control">
                                <option value="">Select Year</option>
                                <?php for($i=2015;$i>1950;$i--){ ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                </table>
                
                <br>
                
                <label for="employerAddressOne">Address1</label>
                <small class="text-red"><?php echo form_error('employerAddressOne');?></small>
                <div class="input-group input-group-sm">
                    <div class="input-group-addon">
                        <span class="fa fa-user"></span>
                    </div>
                    <input type="text" name="employerAddressOne" id="employerAddressOne" class="form-control" placeholder="Enter your address one"/>
                </div>
                
                <br>
                
                <label for="employerAddressTwo">Address2</label>
                <small class="text-red"><?php echo form_error('employerAddressTwo');?></small>
                <div class="input-group input-group-sm">
                    <div class="input-group-addon">
                        <span class="fa fa-user"></span>
                    </div>
                    <input type="text" name="employerAddressTwo" id="employerAddressTwo" class="form-control" placeholder="Enter your address two"/>
                </div>
                
                <br>
                
                <label for="employerCountry">Country</label>
                <small class="text-red"><?php echo form_error('employerCountry');?></small>
                <div ng-controller="countryController">
                    <select name="employerCountry" id="employerCountry" class="form-control">
                        <?php if(set_value('employerCountry')!=''){ ?>
                        <option value="<?php echo set_value('employerCountry');?>"><?php echo set_value('employerCountry'); ?></option>
                        <?php } else { ?>
                        <option value="">Select your country</option>
                        <?php } ?>
                        <option value="{{ x.name }}" ng-repeat="x in country">
                            {{ x.name }}
                        </option>
                    </select>
                </div>
               
                <br>
                
                <label for="employerStatus">Status</label>
                <small class="text-red"><?php echo form_error('employerStatus'); ?></small>
                <div  ng-controller="statusController"> 
                    <select name="employerStatus" id="employerStatus" class="form-control" >
                        <?php if(set_value('voters_civil_status')!=''){ ?>
                            <option value="<?php echo set_value('employerStatus');?>"><?php echo set_value('employerStatus');?></option>
                        <?php }else { ?>
                            <option value="">Select your status</option>
                        <?php } ?>
                            <option value="{{ x.name }}" ng-repeat="x in status">
                               {{ x.name }}
                            </option>
                     </select>
                </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="reset" class="btn btn-default btn-xs">Clear</button>
                <button type="submit" class="btn btn-primary btn-xs">Next</button>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
    
    <div class="col-sm-3">
        <div style="background-color: #fff; padding: 10px; border: 1px solid #eee; border-radius:1px;">
            hello
        </div>

    </div>
    
    
</div>