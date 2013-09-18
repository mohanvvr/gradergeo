<link href="<?php echo base_url()?>assets/css/ui-lightness/jquery-ui-1.8.24.custom.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url()?>assets/js/jquery-ui-1.8.24.custom.min.js" type="text/javascript"></script> 
<div class="contentSec">
    <div class="video_page">
        <ul>
            <li><a href="#" class="textlink2">Importing Grades in to EGP</a></li>
            <li><a href="#" class="textlink2">Reusing AS</a></li>
            <li><a href="#" class="textlink2">Video 3</a></li>
            <li><a href="#" class="textlink2">Video 4</a></li>
        </ul>
    </div>
</div>

<div id="test" style="display:none; text-align:center;">
	<div id="mediaplayer">JW Player goes here</div>
	<script type="text/javascript" src="<?php echo base_url()?>assets/mediaplayer/jwplayer.js"></script>
	<script type="text/javascript">
		jwplayer("mediaplayer").setup({
			flashplayer: "<?php echo base_url()?>assets/mediaplayer/player.swf",
			file: "<?php echo base_url()?>assets/mediaplayer/video.flv",
			image: "<?php echo base_url()?>assets/mediaplayer/preview.jpg"
		});
	</script>
</div>
<script>
	$('.textlink2').click(function() {
		$( "#test" ).dialog({
			title : 'Demo Video',
			width: 'auto',
			height: 'auto',
		});
	});
	</script>
