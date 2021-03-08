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
<html>
<h1>"Pré-traitement du fichier de typage NGS avant import"</h1>

<label for="typageNGS">Quel fichier voulez-vous ajouter ?</label>

<input type="file"
       id="typageNGS" name="typageNGS"
       accept="file/csv">
</html>
?>
