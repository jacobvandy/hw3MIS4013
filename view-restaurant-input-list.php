<select class="form-select" id = "elRID" name = "elRID">
<?php 
while ($restaurantItem = $restaurantList->fetch_assoc()) {
?>
   <option value="<?php echo $restaurantItem['RestaurantID']; ?>" ><?php echo $restaurantItem['Name']; ?></option>
<?php  
}
?>

</select>
