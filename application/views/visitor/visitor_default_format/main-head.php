        <div class="container-fluid" >
            <div style="">
                <h2 class="text-center" style="font-weight: bold; color: #666; ">
                    Quickly choose your Company and the Position that suites for you.
                </h2>
                <h4 class="text-center" style="color: #365f9c;">
                    We will help you to find a job.
                </h4>
            </div>
            <h5>
                <?php echo $this->session->flashdata('employer_registration_success'); ?>
            </h5>
            <h5>
                <?php echo $this->session->flashdata('EmptyEmailPassword'); ?>
            </h5>
            <h5>
                <?php echo $this->session->flashdata('CannotLogin'); ?>
            </h5>
        </div>