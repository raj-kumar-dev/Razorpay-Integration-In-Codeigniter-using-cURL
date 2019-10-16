<?php
$this->load->view('templates/header');
?>
<div class="row">
    <div class="col-lg-12">
        <h1>Sorry</h1>  
        <p style="color:red;">Sorry, your payment failed. <a href="<?php print site_url();?>">Try..</a></p> 
    </div>  
</div>
<?php
$this->load->view('templates/footer');
?>