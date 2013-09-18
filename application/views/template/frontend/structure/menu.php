<?php 
$last_prev_part = $this->uri->segment(1);
$first_menu = $this->uri->segment(1);
$last_part = end(explode('/', $_SERVER['REQUEST_URI'])); ?>
<ul class="<?php if($last_part!='support' && $last_part!='videos' && $last_part!='contact') { echo 'menu_bg_blue'; }?>">
    <li <?php if($first_menu=='submittest') { ?>class="current" <?php }?> >
    	<a href="<?php echo site_url('submittest'); ?>">Submit Tests for Grading</a>
    </li>
<!--    <li style="background-color:#FFF; width:1px;">&nbsp;</li> -->
    <li <?php if($last_part=='answer_sheet') { ?>class="current" <?php } ?>>
    	<a href="<?php echo site_url('home/answer_sheet'); ?>">Print Answer Sheets</a>
    </li>
<!--    <li style="background-color:#FFF; width:1px;">&nbsp;</li> -->
    <li <?php if($last_part=='support') { ?>class="current" <?php }else if($last_part=='videos') {?>class="current"<?php } else if($last_part=='contact'){?>class="current"<?php } ?>>
    	<a href="<?php echo site_url('support/'); ?>">Support</a>
    </li>
</ul>
