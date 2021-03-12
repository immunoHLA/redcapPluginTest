<?php

/**
 * PLUGIN NAME: NGS identification pre-processing
 * DESCRIPTION: Use an import csv file and create a standard csv file with fields corresponding to the data import template
 * in order to import it into redcap with the data import tool
 * VERSION: 1.0.0
 * AUTHOR: Valentine Lesourd-Aubert
 */

// Disable REDCap's authentication
define("NOAUTH", true);

// Call the REDCap Connect file in the main "redcap" directory
require_once"/var/www/html/redcap/redcap_connect.php";

## Your custom PHP code goes here.

// OPTIONAL: Display the project header
require_once APP_PATH_DOCROOT.'ProjectGeneral/header.php';

## HTML Page content goes here
?>

<h1 style="color:#800000;">Pré-traitement du fichier de typage NGS avant import</h1>
<p>Quel fichier voulez-vous ajouter<?php> echo USERID ?>?</p>
<br>
<form method="POST">
<button class="btn-href" name="submit">Link</button>
</form>
 
<?php

if(isset($_POST['submit'])){

$command = escapeshellcmd('./test.py');
$output = shell_exec($command);
echo $output;
}
       
// OPTIONAL: Display the project footer
require_once APP_PATH_DOCROOT.'ProjectGeneral/footer.php';
