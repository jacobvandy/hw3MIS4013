<h1>Taco Bells</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th>ItemID</th>
    <th>ItemName</th>
    <th>Price</th>

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


</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
