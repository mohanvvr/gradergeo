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
				
	<form action="<?php echo site_url('support/send_contact')?>" method="post" name="formId" id="formID">
    <div class="contactArea">
    	<div class="content">Name:</div>
    	<div class="inputLabel"><input name="name" id="name" type="text" class="input validate[required]" autocomplete="off" /></div>
    	<div class="content">Email Address:</div>
    	<div class="inputLabel"><input name="email" id="email" type="text" class="input validate[required]" autocomplete="off"/></div>
    	<div class="content">Subject:</div>
    	<div class="inputLabel"><input name="subject" id="subject" type="text" class="input validate[required]" autocomplete="off"/></div>
    	<div class="content">Comments:</div>
    	<div class="inputLabel"><textarea name="comments" id="comments" class="input validate[required]" style="margin-left:27px" autocomplete="off" rows="7" cols="40"></textarea></div>
   		<div class="submitButton1">
      	<input name="button" type="submit" class="submitbutton" id="button" value="Submit" />
   		</div>
    </div>
    </form>
</div>
