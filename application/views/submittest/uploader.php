<!-- Bootstrap CSS Toolkit styles -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
<!-- Bootstrap styles for responsive website layout, supporting different screen sizes -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-responsive.min.css">
<!-- Bootstrap CSS fixes for IE6 -->
<!--[if lt IE 7]><link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->
<!-- Bootstrap Image Gallery styles -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-image-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.fileupload-ui.css">
<!-- Shim to make HTML5 elements usable in older Internet Explorer versions -->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script src="<?php echo base_url()?>assets/js/jquery.cookie.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function(){
        // binds form submission and fields to the validation engine
        jQuery("#fileupload").validationEngine();
		//$('#success_msg').hide();
    });

<!-- REMEMBER ME CHECKBOX -->

$(function() {
  $("#checker").change(function() {
     if ($(this).is(":checked")){
	 	var input = $('#email');
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		 var emailaddressVal = $("#email").val();
		  	if(emailaddressVal == '') {
				$("#email").after('<span class="err_message">Please enter your email address.</span>');
				document.getElementById("checker").checked=false;
				input.focus();
			}else if(!emailReg.test(emailaddressVal)) {
				$('.err_message').hide();
				$("#email").after('<span class="err_message">Enter a valid email address.</span>');
				document.getElementById("checker").checked=false;
				input.focus();
			}else{
				$.cookie("email", $("#email").val(), {expires: 100});
				$('.err_message').hide();
			}
			
		
	 } 
	 if (!$(this).is(":checked")){
	   $.cookie("email", '');
	   $('#email').val('');
	 } 
  });
  
  var email = $.cookie("email");
  if(email.length > 0 &&  email != 'Type the Email Address to send Results'){
  	$('#email').val(email);
	document.getElementById("checker").checked=true
  }else{
  	document.getElementById("checker").checked=false;
  }
});


//-->
</script>

<div class="contentSec">
	<div class="question"><span class="content">Not sure what to do? Watch our</span> <a href="<?php echo site_url('support/videos')?>" class="videolink">videos.</a></div>
    <div class="clear" style="padding:10px 0 0 25px">
    <div style="height:20px"></div>
	<form name="fileupload" id="fileupload" action="<?php echo base_url()?>assets/server/php/" method="POST" enctype="multipart/form-data">
    <?php if(isset($msg)){?>
    	<div id="success_msg" style="color:#090; font-weight:bold; font-size:14px">Files received. Grading tests</div>
     <?php } ?>   
    	<div class="mailMessage">
            <div class="formandmessage_upload">
              <label for="textfield">Type Email Address to send Results to</label>
              <input name="email" type="text" class="input validate[required]" id="email" size="50" autocomplete="on" value=""/>
              <input name="checker" type="checkbox" class="input" id="checker" />
             	<span class="content">Remember email address</span>
            </div>
             
        </div>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="span7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button add_files">
                    <span>Select Tests...</span>
                    <input type="file" name="files[]" accept="image/png">
                </span>
                
                <!--<button type="button" class="btn btn-danger delete tool_btn">
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle tool_btn">-->
            </div>
            <!-- The global progress information -->
            <div class="span5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="bar" style="width:0%;"></div>
                </div>
                <!-- The extended global progress information -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The loading indicator is shown during file processing -->
        <div class="fileupload-loading"></div>
        <br>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody></table>
          
        <div class="row fileupload-buttonbar tool_btn" style="padding-left:30px;">
        	<button type="submit" class="btn btn-primary start main_start">
                    <span>Start upload</span>
                </button>
                <input type="hidden" name="folder_name" id="folder_name" value="" />
                <!--<button type="reset" class="btn btn-warning cancel main_delete">
                    <span>Cancel upload</span>
                </button>-->
        </div>
        
        </div>
        
        
    </form>
    </div>
</div> 
 
 <!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td class="preview"><span class="fade"></span></td>
        <td class="name"><span>{%=file.name%}</span></td>
        <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
        {% if (file.error) { %}
            <td class="error" colspan="2"><span class="label label-important">{%=locale.fileupload.error%}</span> {%=locale.fileupload.errors[file.error] || file.error%}</td>
        {% } else if (o.files.valid && !i) { %}
            <td style="display:none;">
                <div class="progress progress-success progress-striped active" style="display:none;"><div class="bar" style="display:none; width:0%;"></div></div>
            </td>
            <td class="start" style="width:20px">{% if (!o.options.autoUpload) { %}
                <button class="btn btn-primary hide_start">
                    <span>Submit</span>
                </button>
            {% } %}</td>
        {% } else { %}
            <td colspan="2"></td>
        {% } %}
        <td class="cancel">{% if (!i) { %}
            <button class="btn btn-warning">
                <span>Cancel</span>
            </button>
        {% } %}</td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        {% if (file.error) { %}
            <td></td>
            <td class="name"><span>{%=file.name%}</span></td>
            <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
            <td class="error" colspan="2"><span class="label label-important">{%=locale.fileupload.error%}</span> {%=locale.fileupload.errors[file.error] || file.error%}</td>
        {% } else { %}
            <td class="preview">{% if (file.thumbnail_url) { %}
                <a href="{%=file.url%}" title="{%=file.name%}" rel="gallery" download="{%=file.name%}"><img src="{%=file.thumbnail_url%}"></a>
            {% } %}</td>
            <td class="name">
                <a href="{%=file.url%}" title="{%=file.name%}" rel="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
            </td>
            <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
            <td colspan="2"></td>
        {% } %}
        <td class="delete" style="display:none;">
            <button class="btn btn-danger" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}">
                <span>{%=locale.fileupload.destroy%}</span>
            </button>
            <input type="checkbox" name="delete" value="1">
        </td>
    </tr>
{% } %}


</script>


<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo base_url()?>assets/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="<?php echo base_url()?>assets/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="<?php echo base_url()?>assets/js/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="<?php echo base_url()?>assets/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS and Bootstrap Image Gallery are not required, but included for the demo -->
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap-image-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo base_url()?>assets/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url()?>assets/js/jquery.fileupload.js"></script>
<!-- The File Upload file processing plugin -->
<script src="<?php echo base_url()?>assets/js/jquery.fileupload-fp.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?php echo base_url()?>assets/js/jquery.fileupload-ui.js"></script>
<!-- The localization script -->
<script src="<?php echo base_url()?>assets/js/locale.js"></script>
<!-- The main application script -->
<script src="<?php echo base_url()?>assets/js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
<!--[if gte IE 8]><script src="js/cors/jquery.xdr-transport.js"></script><![endif]-->   

<script type="text/javascript">
$('.main_start').hide();
$('#email').click(function(){
	$('#email').val('');
});

$('#email').blur(function(){
	var email = $('#email').val();
	if(email == ''){
		$('#email').val('Type the Email Address to send Results');
	}
});

$('#fileupload').bind('fileuploadsubmit', function (e, data) {
    // The example input, doesn't have to be part of the upload form:
    var input = $('#email');
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	 var emailaddressVal = $("#email").val();
    data.formData = {email: input.val()};
    if (emailaddressVal == '' || emailaddressVal == 'Type the Email Address to send Results') {
	  if(emailaddressVal == '') {
	  	$('.err_message').hide();
		$("#email").after('<span class="err_message">Please enter your email address.</span>');
	}else if(!emailReg.test(emailaddressVal)) {
		$('.err_message').hide();
		$("#email").after('<span class="err_message">Enter a valid email address.</span>');
	}
      input.focus();
      return false;
    }else{
		$('.err_message').hide();
	}
	
	
});
$('#fileupload').bind('fileuploadcompleted', function (e, data) {
		alert("Files received. Score report will be sent to the email address provided.");
		window.location.href = '<?php echo base_url()?>'; 
        
});

$('#fileupload').bind('fileuploadadd', function (e, data) {
	$('.add_files').hide();
});

$('.btn-warning').live("click",function(){
	$('.add_files').show();
});

$('#fileupload').fileupload({
  // fileupload options as before
  // Unwrapping HTML-encoded JSON required for IE's iframe transport.
  dataType: 'iframejson',
  converters: {
    'html iframejson': function(htmlEncodedJson) {
      return $.parseJSON($('<div/>').html(htmlEncodedJson).text());
    },
    'iframe iframejson': function (iframe) {
      return $.parseJSON(iframe.find('body').text());
    }
  }
});


</script>
