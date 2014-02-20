<?php
if (isset($_REQUEST['t'])) {
	$theme=$_REQUEST['t'];
	include($theme."/header.php");
	include($theme."/footer.php");
} else {
	header("Location: ../index.php");
}
?>