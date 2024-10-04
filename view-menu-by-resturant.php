<h1>Menu by Restarant</h1>
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
while ($menus = $menu->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $menus['MenuItemID']; ?></td>
  <td><?php echo $menus['ItemName']; ?></td>
  <td><?php echo $menus['Price']; ?></td>
  <td><?php echo $menus['City']; ?></td>
  <td><?php echo $menus['State']; ?></td>
  <td><?php echo $menus['Address']; ?></td>

</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
