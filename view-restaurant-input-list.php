<select class="form-select" id = "elRID" name = "elRID">
<?php 
while ($restaurantItem = $restaurantList->fetch_assoc()) {
$selText = "";
if ($selectedEmployee == $restaurantItem['RestaurantID']) {
   $selText = "selected";
}
?>
   <option value="<?php echo $restaurantItem['RestaurantID']; ?>" <?=$selText?> ><?php echo $restaurantItem['Name']; ?></option>
<?php  
}
?>

</select>
