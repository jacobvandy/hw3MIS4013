<?php
require_once("util-db.php");
require_once("model-employees-with-restaurant.php");

$pageTitle = "Taco Bell and their Employees";
include "view-header.php";
$restaurant = SelectRestaurant();
include "view-employees-with-restaurant.php";
include "view-footer.php";
?>
