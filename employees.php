<?php
require_once("util-db.php");
require_once("model-employees.php");

$pageTitle = "Taco Bell Employees";
include "view-header.php";
$employee = SelectEmployees();
include "view-employees.php";
include "view-footer.php";
?>
