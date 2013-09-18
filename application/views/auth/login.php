<script>
    jQuery(document).ready(function(){
        // binds form submission and fields to the validation engine
        jQuery("#formID").validationEngine();
    });
</script>
<div class="contentSec">
	<div class="err_message">
<?php if($this->session->userdata('message')){ echo "<script type='text/javascript'>alert('Your request submited successfully! We will get back you soon.');</script>"; 
// echo $this->session->userdata('message');
$this->session->unset_userdata('message'); }?>
	</div> 
				
	<form action="<?php echo site_url('auth/login')?>" method="post" name="formId" id="formID">
    <div class="contactArea">
    	<div class="content">Username:</div>
    	<div class="inputLabel"><input name="username" id="username" type="text" class="input validate[required]" autocomplete="off" /></div>
        <div class="content">Password:</div>
    	<div class="inputLabel"><input name="password" id="password" type="password" class="input validate[required]" autocomplete="off"/></div>
    	<div class="submitButton1">
      	<input name="button" type="submit" class="submitbutton" id="button" value="Login!" />
   		</div>
    </div>
    </form>
</div>
