<h1>Menu by Location</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th>EmployeeID</th>
    <th>EmployeeName</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zip Code</th>
      

    </tr>
    
  </thead>
    <tbody>
      <?php
while ($emps = $emp->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $emps['EmployeeID']; ?></td>
  <td><?php echo $emps['EmployeeName']; ?></td>
   <td><?php echo $emps['Address']; ?></td>
  <td><?php echo $emps['City']; ?></td>
  <td><?php echo $emps['State']; ?></td>
  <td><?php echo $emps['ZipCode']; ?></td>

</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
