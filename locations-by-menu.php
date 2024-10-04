<?php
require_once("util-db.php");
require_once("model-locations-by-menu.php");

$pageTitle = "Menu Items By Restaurant";
include "view-header.php";
$locations = SelectLocationsByMenu($_POST['lid']);
include "view-locations-by-menu.php";
include "view-footer.php";
?>
