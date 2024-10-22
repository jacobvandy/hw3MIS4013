<?php
require_once("util-db.php");
require_once("model-resturant.php");

$pageTitle = "Taco Bell";
include "view-header.php";

if (isset($_POST['actionType'])) {
 switch ($_POST['actionType']) {
   case "Add":
   insertRestaurant($_POST['rName'], $_POST['rRating'], $_POST['rFoodType']);
   break;
 }
}


$restaurant = SelectRestaurant();
include "view-resturant.php";
include "view-footer.php";
?>
