<link href="<?php echo base_url()?>assets/css/ui-lightness/jquery-ui-1.8.24.custom.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url()?>assets/js/jquery-ui-1.8.24.custom.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="<?php echo base_url()?>assets/mediaplayer/jwplayer.js"></script>
<div class="contentSec">
    <div class="video_page">
        <ul>
            <li class="links">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" id="intro" class="videolink">Using GraderJoe</a></li>
            <li class="links">&#8618;&nbsp;&nbsp;<a href="#" id="scanning" class="videolink">Scanning Tests</a></li>
            <li class="links">&#8618;&nbsp;&nbsp;<a href="#" id="gradeimport" class="videolink">Importing Grades into GradeQuick</a></li>
           <li class="links">&#8618;&nbsp;&nbsp;<a href="#" id="egpimport" class="videolink">Importing Grades into Easy Grade Pro</a></li>
        </ul>
	<br/>
	<br/>
	<br/>
	<br/>
	<center><div id='mediaplayer'></div></center>
    </div>
</div>

<!--
<div id="test" style="text-align:center;">
	<div id="mediaplayer">JW Player goes here 1</div>
	<script type="text/javascript" src="<?php echo base_url()?>assets/mediaplayer/jwplayer.js"></script>
	<script type="text/javascript">
		jwplayer("mediaplayer").setup({
			flashplayer: "<?php echo base_url()?>assets/mediaplayer/player.swf",
			file: "<?php echo base_url()?>assets/mediaplayer/intro.mp4",
			image: "<?php echo base_url()?>assets/mediaplayer/intro.jpg",
			width: "auto",
			height: "auto"
		});
	</script>
</div>
-->
<script>
	$('.videolink').click(function() {
    		var id = $(this).attr("id");
    		if (id === 'intro') {
		jwplayer('mediaplayer').setup({
			flashplayer: "<?php echo base_url()?>assets/mediaplayer/player.swf",
			file: "<?php echo base_url()?>assets/mediaplayer/intro.mp4",
			image: "<?php echo base_url()?>assets/mediaplayer/intro.jpg",
			width: "540",
			height: "360"
		});

		jwplayer("mediaplayer").play();
		} else if(id == 'scanning') {
		jwplayer('mediaplayer').setup({
			flashplayer: "<?php echo base_url()?>assets/mediaplayer/player.swf",
			file: "<?php echo base_url()?>assets/mediaplayer/scanning.mp4",
			image: "<?php echo base_url()?>assets/mediaplayer/scanning.jpg",
			width: "540",
			height: "360"
		});


		jwplayer("mediaplayer").play();

		}else if(id == "gradeimport") {
		jwplayer('mediaplayer').setup({
			flashplayer: "<?php echo base_url()?>assets/mediaplayer/player.swf",
			file: "<?php echo base_url()?>assets/mediaplayer/gradeimport.mp4",
			image: "<?php echo base_url()?>assets/mediaplayer/gradeimport.jpg",
			width: "540",
			height: "360"
		});


		jwplayer("mediaplayer").play();

		} else if(id == "egpimport") {
		jwplayer('mediaplayer').setup({
			flashplayer: "<?php echo base_url()?>assets/mediaplayer/player.swf",
			file: "<?php echo base_url()?>assets/mediaplayer/egp-import.mp4",
			image: "<?php echo base_url()?>assets/mediaplayer/cover-image-importing-egp.jpg",
			width: "540",
			height: "360"
		});


		jwplayer("mediaplayer").play();

		} else {
			alert("Unsupported");
		}
  	});

</script>
