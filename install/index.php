<?php
$reinstall=false;
// if ../config.php exist act as re-install
if (!file_exists("../config.php")) {
    $reinstall=true;
}
if ($reinstall==false) {
	
}
?>