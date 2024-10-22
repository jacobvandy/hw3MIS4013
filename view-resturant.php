<div class= "row">
  <div class = "col">
    <h1>Taco Bells</h1>
  </div>
  <div class = "col-auto">
    <?php
include "view-resturant-newform.php";
?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th>ID</th>
    <th>Name</th>
    <th>Rating</th>
    <th>Food Type</th>
    </tr>
    
  </thead>
    <tbody>
      <?php
while ($resturants = $restaurant->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $resturants['RestaurantID']; ?></td>
  <td><?php echo $resturants['Name']; ?></td>
  <td><?php echo $resturants['Rating']; ?></td>
  <td><?php echo $resturants['FoodType']; ?></td>
  <td><a href="menu-by-resturant.php?id=<?php echo $resturants['RestaurantID']; ?>">Menu Items</a></td>

</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
