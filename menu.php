<?php
require_once("util-db.php");
require_once("model-menu.php");

$pageTitle = "Taco Bell Menu Items";
include "view-header.php";
$restaurant = SelectRestaurant();
include "view-menu.php";
include "view-footer.php";
?>
