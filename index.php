<?php
// Check if config file does exist
if (!file_exists("config.php")) {
    // Redirect to install
    header("Location: install/index.php");
}
include("config.php");
?>