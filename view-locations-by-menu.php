<h1>Menu by Location</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th>ItemID</th>
    <th>ItemName</th>
    <th>Price</th>
    <th>City</th>
    <th>State</th>
    <th>Address</th>
      

    </tr>
    
  </thead>
    <tbody>
      <?php
while (location = $locations->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $location['MenuItemID']; ?></td>
  <td><?php echo $location['ItemName']; ?></td>
  <td><?php echo $location['Price']; ?></td>
  <td><?php echo $location['City']; ?></td>
  <td><?php echo $location['State']; ?></td>
  <td><?php echo $location['Address']; ?></td>

</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
