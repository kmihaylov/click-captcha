<?php

require_once( "clickCaptchaClass.php" );

$clickObj = new clickCaptcha;

if( isset($_GET['compare'] ) ) {
	$clickObj->compare();
}


?>