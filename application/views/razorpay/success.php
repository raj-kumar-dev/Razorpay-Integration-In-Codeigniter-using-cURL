<?php
$this->load->view('templates/header');
?>
<div class="row">
    <div class="col-lg-12">
        <h1>Thank you</h1>  
        <p style="color:#11a656;">Thank You, Your payment has been processed successfully.</p>   
    </div> 
    <div class="col-lg-12"> 
        <a href="<?php print site_url();?>" class="pull-right btn btn-info btn-xs" style="margin: 2px;"><i class="fa fa-mail-reply"></i> Back To Home</a>                
    </div>  
</div><!-- /.row -->
<?php
$this->load->view('templates/footer');
?>