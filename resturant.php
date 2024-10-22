<?php
require_once("util-db.php");
require_once("model-resturant.php");

$pageTitle = "Taco Bell";
include "view-header.php";

if (isset($_POST['actionType'])) {
 switch ($_POST['actionType']) {
   case "Add":
   if (insertRestaurant($_POST['rName'], $_POST['rRating'], $_POST['rFoodType'])) {
    echo '<div class="alert alert-success" role="alert">Restaurant Added</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error adding Restaurant</div>';
   }
  
   break;
  case "Delete":
   if (deleteRestaurant($_POST['rid'])) {
    echo '<div class="alert alert-success" role="alert">Restaurant Deleted</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error deleting Restaurant</div>';
   }
  
   break;
 }
}


$restaurant = SelectRestaurant();
include "view-resturant.php";
include "view-footer.php";
?>
