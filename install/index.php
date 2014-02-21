<?php
$reinstall=false;
// if ../config.php exist act as re-install
if (!file_exists("../config.php")) {
    $reinstall=true;
}
if ($reinstall==false) {
	// New Setup
}
ob_start("ob_gzhandler");
session_start();
// Gathering Server Data
$os = PHP_OS;
$phpver = phpversion();
$host = $_SERVER['HTTP_HOST'];
$host = "http://$host$p_self";
switch($os) {
case 'Darwin':
	// Mac OS X
	$binpath='/usr/bin/';
	break;
default:
	$binpath='/usr/bin/';
	break;
}
// Checking dependencies and binary apps:
// Check for Binary CURL
// Load Default Template
include('../themes/?t=default');
include("../themes/".$theme."/footer.php");
?>
