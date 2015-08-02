<div class="container" >
    <div class="form-group">
        <img src="<?php echo base_url();?>img/banner-jobseek.jpg" style="width:1140px;" />
    <div>
</div>
<div style="background-color: #eef2f6;">
</div>
<div style="background-color: #eef2f6;">
    <div class="container"> 
    <div class="row">
         <div class="col-sm-6">
            <img src="<?php echo base_url();?>img/flat-icon.png" style="width:500px;margin-bottom: 20px;"/>
        </div>
        <div class="col-sm-5">
            <div class="list-group text-center" style="margin-top: 50px;">
                <div style="background-color: #365f9c; font-size: 15px; color:orange; font-weight: bold; border-radius: 10px 10px 0px 0px">
                    Select your place
                </div>
                <?php foreach($location as $row) { ?>
                <a href="<?php echo base_url(); ?>index.php/ApplicantPageC/findJob/<?php echo $row->location_name; ?>">
                    <div class="list-group-item">
                        <?php echo $row->location_name; ?>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
       
    </div>
    </div>
</div>