<?php
require_once("util-db.php");
require_once("model-menu.php");

$pageTitle = "Taco Bell Menu Items";
include "view-header.php";

if (isset($_POST['actionType'])) {
 switch ($_POST['actionType']) {
   case "Add":
   if (insertMenu($_POST['miName'], $_POST['miPrice'])) {
    echo '<div class="alert alert-success" role="alert">Menu Item Added</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error adding Menu Item</div>';
   }
  
   break;
   case "Edit":
   if (updateMenu($_POST['miName'], $_POST['miPrice'], $_POST['mid'])) {
    echo '<div class="alert alert-success" role="alert">MenuItem Edited</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error editing Menu Item</div>';
   }
  
   break;
  case "Delete":
   if (deleteMenu($_POST['mid'])) {
    echo '<div class="alert alert-success" role="alert">Menu Item Deleted</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error deleting MenuItem</div>';
   }
  
   break;
 }
}


$menu = SelectMenu();
include "view-menu.php";
include "view-footer.php";
?>
