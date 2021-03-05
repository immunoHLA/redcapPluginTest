<?php
// Disable REDCap's authentication
define("NOAUTH", true);

// Call the REDCap Connect file in the main "redcap" directory
require_once"/var/www/html/redcap/redcap_connect.php";

## Your custom PHP code goes here.

Print "Hello,World!";
Echo "Hello, World!";
?>
