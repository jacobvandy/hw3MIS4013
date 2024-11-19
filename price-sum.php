<?php
require_once("util-db.php");
require_once("model-price-sum.php");

$pageTitle = "Price Summary";
include "view-header.php";

$menu1 = SelectMenus();
include "view-price-sum.php";
include "view-footer.php";
?>
