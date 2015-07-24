
            <div style="background-color: #eef2f6;">
                <div class="container"> 
                <div class="row">
                    <div class="col-sm-6">
                        <div class="breadcrumb">
                            <b>
                            Get Started
                            </b>
                        </div>
                        <div class="list-group text-center" style="margin-top: 30px;">
                            <div style="background-color: #365f9c; font-size: 15px; color:orange; font-weight: bold; padding: 5px; border-radius: 10px 10px 0px 0px">
                                Select your place
                            </div>
                            <?php foreach($location as $row){ ?>
                            <a href="<?php echo base_url().'index.php/EmployerMainPageC/postJob/'.$row->location_name;?>">
                                <div class="list-group-item"><?php echo $row->location_name;?></div>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php echo base_url();?>img/left_content.png" style="margin-bottom: 20px;"/>
                    </div>
                </div>
                </div>
            </div>