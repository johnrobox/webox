
<div class="breadcrumb">
    <div class="container">
        <?php echo form_open(); ?>
        <?php echo form_close(); ?>
        <?php echo $this->db->platform(); ?>
        <?php echo $this->db->version(); ?>
        <br>
        <?php $sql = $this->db->get_compiled_select('employer_member'); 
        echo $sql; ?>
    </div>
</div>