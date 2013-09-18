<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Grader Joe BETA</title>
<?php $this->load->view("template/frontend/structure/includes.php"); ?>
</head>

<body>
<div class="wrapper">
    <div class="header">
    	<?php $this->load->view("template/frontend/structure/header.php"); ?>
    </div>
    <div class="contentSec">
        <div class="circleArrow"></div>
        <p style="text-align:center;">How It Works</p>
        <div class="howItWorks"><a href="<?php echo site_url('submittest'); ?>">Try it Out</a></div>
    </div>
    <div class="footerSec">
    	<?php $this->load->view("template/frontend/structure/footer.php"); ?>
    </div>
</div>
</body>
</html>
