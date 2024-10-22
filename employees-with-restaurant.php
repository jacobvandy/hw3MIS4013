<?php
require_once("util-db.php");
require_once("model-employees-with-restaurant.php");

$pageTitle = "Taco Bell and their Employees";
include "view-header.php";


if (isset($_POST['actionType'])) {
 switch ($_POST['actionType']) {
   case "Add":
   if (insertEmpLoc($_POST['elAddress'], $_POST['elCity'], $_POST['elState'], $_POST['elZipCode'])) {
    echo '<div class="alert alert-success" role="alert">Employee Added</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error adding Employee</div>';
   }
  
   break;
 
 }
}


$restaurant = SelectRestaurant();
include "view-employees-with-restaurant.php";
include "view-footer.php";
?>
