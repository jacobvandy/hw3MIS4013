o<h1>Taco Bells Employees</h1>
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
while ($employees = $employee->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $employees['EmployeeID']; ?></td>
  <td><?php echo $employees['LocationID']; ?></td>
  <td><?php echo $employees['EmployeeName']; ?></td>
  <td><a href="employees-by-location.php?id=<?php echo $emp['LocationID']; ?>">Menu Items</a></td>


</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
