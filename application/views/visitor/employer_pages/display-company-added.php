
<div class="jumbotron">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <button class="btn btn-primary" id="click_registration_page"><i class="fa fa-plus"></i> Add Company</button>
                <br><br>
                <?php if (is_array($allCompany)) { ?>
                <table class="table table-bordered">
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <?php } else { ?>
                <div class="alert alert-info">
                    <i class="fa fa-info"></i>
                    Don't have company in the list.

                </div>
                <?php } ?>
                
                <div id="load_registration_page"></div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        
                    </div>
                    <div class="panel-body">
                        <?php if (is_array($allCompany)) { ?>
                        <?php     echo 'need to fetch'; ?>
                        <?php } else { ?>
                        <?php     echo 'no data'; ?>
                        <?php } ?>
                    </div>
                    <div class="panel-footer">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready( function() {
    $("#click_registration_page").on("click", function() {
        $("#load_registration_page").load("<?php echo base_url(); ?>index.php/EmployerAddCompanyC");
    });
});
</script>