<?php  $last_part = end(explode('/', $_SERVER['REQUEST_URI'])); ?>
<ul>
<li <?php if($last_part=='support') { ?>class="current" <?php } else { } ?>>
	<a href="<?php echo site_url('support'); ?>">FAQ</a>
</li>
<li <?php if($last_part=='videos') { ?>class="current" <?php } else { } ?>>
	<a href="<?php echo site_url('support/videos'); ?>">How-to Videos</a>
</li>
<li <?php if($last_part=='contact') { ?>class="current" <?php } else { } ?>>
	<a href="<?php echo site_url('support/contact'); ?>">Contact Us</a>
</li>
</ul>
