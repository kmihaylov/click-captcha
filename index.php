<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Click CAPTCHA Demo</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <?php include('clickCaptcha.php'); ?>  
	</head>
	<body onload="initCaptcha()"> <!-- initializes the CAPTCHA on load -->

	<div id="captcha"></div>  <!-- The click-CAPTCHA module is placed in here -->

	<div id="textBox"></div>
	</body>
</html>