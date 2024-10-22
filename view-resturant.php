<div class= "row">
  <div class = "col">
    <h1>Taco Bells</h1>
  </div>
  <div class = "col-auto">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus" viewBox="0 0 16 16">
      <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z"/>
      <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z"/>
      <path d="M8.5 6.5a.5.5 0 0 0-1 0V8H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V9H10a.5.5 0 0 0 0-1H8.5z"/>
    </svg>
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
