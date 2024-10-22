<?php
require_once("util-db.php");
require_once("model-employees.php");

$pageTitle = "Taco Bell Employees";
include "view-header.php";

if (isset($_POST['actionType'])) {
 switch ($_POST['actionType']) {
   case "Add":
   if (insertEmp($_POST['eLocationID'], $_POST['eName'])) {
    echo '<div class="alert alert-success" role="alert">Employee Added</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error adding Employee</div>';
   }
  
   break;
   case "Edit":
   if (updateEmp($_POST['eName'], $_POST['emid'])) {
    echo '<div class="alert alert-success" role="alert">Employee Edited</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error editing Employee</div>';
   }
  
   break;
  case "Delete":
   if (deleteEmp($_POST['emid'])) {
    echo '<div class="alert alert-success" role="alert">Employee Deleted</div>';
   } else {
    '<div class="alert alert-danger" role="alert">Error deleting Employee</div>';
   }
  
   break;
 }
}


$employee = SelectEmployees();
include "view-employees.php";
include "view-footer.php";
?>
