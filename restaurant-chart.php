<?php
require_once("util-db.php");
require_once("model-restaurant-chart.php");

$pageTitle = "Taco Bells Chart";
include "view-header.php";

$restaurant = SelectRestaurant();
include "view-restaurant-chart.php";
include "view-footer.php";
?>
