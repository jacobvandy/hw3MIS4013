<?php
require_once("util-db.php");
require_once("model-resturant.php");

$pageTitle = "Taco Bell";
include "view-header.php";
$resturant = SelectResturant();
include "view-resturant.php";
include "view-footer.php";
?>
