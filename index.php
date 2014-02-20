<?php
// Check if config file does exist
// File v 1

if (!file_exists("config.php")) {
    // Redirect to install
    header("Location: install/index.php");
}
include("config.php");
?>