<h1>Taco Bells</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th>ItemID</th>
    <th>ItemName</th>
    <th>Price</th>
      <th></th>

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
  <td> 
<form method="post" action="locations-by-menu.php">
  <input type="hidden" name="lid" value="<?php echo $menus['MenuItemID']; ?>">
  <button type="submit" class="btn btn-primary">Location</button>
</form>
  </td>

</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
