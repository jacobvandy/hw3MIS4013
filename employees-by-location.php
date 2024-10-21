

<?php
require_once("util-db.php");
require_once("model-employees-by-location.php");

$pageTitle = "Menu Items By Restaurant";
include "view-header.php";
$emp = SelectEmpByLocation($_POST['lid']);
include "view-employees-by-location.php";
include "view-footer.php";
?>
