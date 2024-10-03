<?php
require_once("util-db.php");
require_once("model-menu-by-resturant.php");

$pageTitle = "Menu Items By Restaurant";
include "view-header.php";
$menu = SelectMenuByRestaurant($_GET['id']);
include "view-menu-by-resturant.php";
include "view-footer.php";
?>
