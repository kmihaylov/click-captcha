<?php

require_once( "clickCaptchaClass.php" );

$clickObj = new clickCaptcha;

if( isset($_GET['compare'] ) ) {
	$clickObj->compare();
}

if( isset( $_GET['generate'] ) ) {
	$clickObj->generate();
}

?>