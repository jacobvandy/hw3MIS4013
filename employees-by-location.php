

<?php
require_once("util-db.php");
require_once("model-employees-by-location.php");

$pageTitle = "Employees and their Locations";
include "view-header.php";
$emp = SelectEmpByLocation($_POST['eid']);
include "view-employees-by-location.php";
include "view-footer.php";
?>
