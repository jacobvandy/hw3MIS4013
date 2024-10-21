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
  <td>
    
    
  
  <form method="post" action="employees-by-location.php">
  <input type="hidden" name="eid" value="<?php echo $emp['MenuItemID']; ?>">
  <button type="submit" class="btn btn-primary">EmpID</button>
</form>
  
  </td>


</tr>
      <?php
}
?>
    </tbody>

  </table>
</div>
