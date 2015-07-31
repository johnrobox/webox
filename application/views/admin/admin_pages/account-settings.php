<div class="col-sm-9">
    
    <div class="breadcrumb">
        <h4>
        Admin Settings 
        <span class="fa fa-arrow-right"></span>
        </h4>
    </div>
    
    <div class="breadcrumb">
        <pre>
        <?php 
        var_dump($adminFirstname);
//        foreach ($adminAccountInfo as $row) {
//            echo $row->id;
//        }
        ?>
        <?php echo form_open(); ?>
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text">
        </div>
        <?php echo form_close(); ?>
    </div>
    
</div>