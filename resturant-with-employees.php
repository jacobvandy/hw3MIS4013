<?php
require_once("util-db.php");
require_once("model-resturant-with-employees.php");

$pageTitle = "Taco Bell and their Employees";
include "view-header.php";
$restaurant = SelectRestaurant();
include "view-resturant-with-employees.php";
include "view-footer.php";
?>
