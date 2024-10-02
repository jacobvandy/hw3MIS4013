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
while ($tacobell = $resturant->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $tacobell['ResturantID']; ?></td>
  <td><?php echo $tacobell['Name']; ?></td>
  <td><?php echo $tacobell['Rating']; ?></td>
  <td><?php echo $tacobell['FoodType']; ?></td>



</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
