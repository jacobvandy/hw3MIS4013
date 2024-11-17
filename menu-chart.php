<?php
require_once("util-db.php");
require_once("model-menuprice-chart.php");

$pageTitle = "Menu Price Chart";
include "view-header.php";

$menu = SelectMenu();
include "view-menuprice-chart.php";
include "view-footer.php";
?>
