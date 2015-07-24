
<div class="jumbotron">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="fa fa-pencil"></span>
                        Post your job 
                    </div>
                    <?php echo form_open(); ?>
                    <div class="panel-body">
                        
                        <label for="position">Position Name</label>
                        <div class="input-group input-group-sm">
                            <div class="input-group-addon">
                                <span class="fa fa-user"></span>
                            </div>
                            <input type="text" name="position" id="position" class="form-control"/>
                        </div>
                        
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
                        
                        <label for="company">Company</label>
                        <div class="input-group input-group-sm">
                            <div class="input-group-addon">
                                <span class="fa fa-user"></span>
                            </div>
                            <input type="text" name="company" id="company" class="form-control"/>
                        </div>
                        
                        <label for="addressOne">Company Address </label>
                        <div class="input-group input-group-sm">
                            <div class="input-group-addon">
                                <span class="fa fa-user"></span>
                            </div>
                            <input type="text" name="addressOne" id="addressOne" class="form-control"/>
                        </div>
                        
                        <label for="companyDescription">Company Description</label>
                        <textarea name="companyDescription" id="companyDescription" class="form-control"></textarea>
                        
                        <label for="jobDescription">Job Description</label>
                        <textarea name="jobDescription" id="jobDescription" class="form-control"></textarea>
                        
                        <label for="jobQualification">Job Qualification</label>
                        <textarea name="jobQualification" for="jobQualification" class="form-control"></textarea>
                        
                        <label for="video">Embed Video</label>
                        <textarea name="video" for="video" class="form-control"></textarea>
                        
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