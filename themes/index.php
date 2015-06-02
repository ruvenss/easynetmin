<?php
if (isset($_REQUEST['t'])) {
	$theme=$_REQUEST['t'];
	include($theme."/header.php");
} else {
	header("Location: ../index.php");
}
?>