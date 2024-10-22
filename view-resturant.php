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
      <th></th>
      <th></th>
      <th></th>
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
  <td>
    <form method="post" action="">
  <input type="hidden" name="rid" value="<?php echo $resturants['RestaurantID']; ?>">
  <input type="hidden" name="actionType" value="Delete">
  <button type="submit" class="btn btn-primary" onclick="return confirm('Confirm Changes?');">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg>
  </button>
</form>
  </td>
  <td>
     
  </td>
  <td><a href="menu-by-resturant.php?id=<?php echo $resturants['RestaurantID']; ?>">Menu Items</a></td>

</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
