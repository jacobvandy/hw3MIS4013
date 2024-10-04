<h1>Taco Bells Employees</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th>Employee ID</th>
    <th>Location ID</th>
    <th>Employee Name</th>
   
    </tr>
    
  </thead>
    <tbody>
      <?php
while ($resturants = $restaurant->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $resturants['EmployeeID']; ?></td>
  <td><?php echo $resturants['LocationID']; ?></td>
  <td><?php echo $resturants['EmployeeName']; ?></td>
 <td><a href="menu-by-resturant.php?id=<?php echo $resturants['RestaurantID']; ?>">Menu Items</a></td>

</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
