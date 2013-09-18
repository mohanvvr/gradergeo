<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ui-lightness/jquery-ui.css" />
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<script>
    $(function() {
		$( "#accordion" ).accordion();
		$(".max_marks").click(function(e) {
			e.stopPropagation();
		});
		$(".result_radio").click(function(e) {
			e.stopPropagation();
		});
});
    </script>
<div class="contentSec" style="padding:10px;">
	<div class="grading_top">
    	<div class="top_left">
        	<div>Points Per Question: </div>
            <div>
            <input type="radio" name="points" checked="checked"/> All questions worth <input type="text" value="5" name="no_of_points" id="no_of_point"/> points
            </div>
            <div>
            	<input type="radio" name="points" checked="checked"/> Assign Points individually
            </div>
            <div>
            	Total Points: 50
            </div>
        </div>
        <div class="top_right">
        	<div>Points Per Question: </div>
            <div>
            <input type="radio" name="points" checked="checked"/> All questions worth <input type="text" value="5" name="no_of_points" id="no_of_point"/> points
            </div>
            <div>
            	<input type="radio" name="points" checked="checked"/> Assign Points individually
            </div>
        </div>
        <div>
        </div>
    </div>
	<div id="accordion">
    <?php
		//var_dump($image_list);
		$img_list = $image_list['img_list'];
		$sno = 1;
		foreach($img_list as $img_val){
	?>
    <h3>
    	Question <?php echo $sno++; ?> <input type="text" name="max_marks" id="max_marks" class="max_marks"/> <input type="radio" name="result" class="result_radio"/> Correct <input type="radio" name="result" class="result_radio"/></h3>
    <div>
    	<?php foreach($img_val as $img){?>
        	<p style="float:left;">
        	<img src="<?php echo base_url()?>assets/answer_sheets/sample images/<?php echo $img; ?>"/>
            </p>
        <?php } ?>
        <div style="clear:both"></div>
    </div>
    <?php } ?>
    
	</div>
</div>
</div>
<style type="text/css">
	.grader_header{ background-color:#999999; margin: 5px 5px 5px 5px};
</style>
<script type="text/javascript">
	$(function() {
		//$( ".content" ).hide();
		$(".acc").click(function(){
			//alert('welcome');
			$(this).next(".content").show();
			$(this).next( ".content" ).css( "background", "yellow" );
		});
		
	  });
</script>