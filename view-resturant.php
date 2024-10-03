<h1>Taco Bells</h1>
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
  <td><?php echo $resturants['ResturantID']; ?></td>
  <td><?php echo $resturants['Name']; ?></td>
  <td><?php echo $resturants['Rating']; ?></td>
  <td><?php echo $resturants['FoodType']; ?></td>

</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
