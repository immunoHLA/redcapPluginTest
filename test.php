<?php
// Call the REDCap Connect file in the main "redcap" directory
require_once "../redcap_connect.php";

## Your custom PHP code goes here. You may use any constants/variables listed in redcap_info().

// OPTIONAL: Display the project header
require_once APP_PATH_DOCROOT . 'ProjectGeneral/header.php';

## Your HTML page content goes here
<html>
  <h1>Hello World</h1>
</html>

// OPTIONAL: Display the project footer
require_once APP_PATH_DOCROOT . 'ProjectGeneral/footer.php';
?>
