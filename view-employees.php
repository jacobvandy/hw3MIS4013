<div class= "row">
  <div class = "col">
    <h1>Taco Bells Employees</h1>
  </div>
  <div class = "col-auto">

    <?php
include "view-employees-newform.php";
?>
</div>
</div>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th>Employee ID</th>
    <th>Location ID</th>
    <th>Employee Name</th>
   <th></th>
      <th></th>
      <th></th>
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
    <form method="post" action="">
  <input type="hidden" name="emid" value="<?php echo $employees['EmployeeID']; ?>">
  <input type="hidden" name="actionType" value="Delete">
  <button type="submit" class="btn btn-primary" onclick="return confirm('Confirm Changes?');">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg>
  </button>
</form>
  </td>
  <td>
     <?php
include "view-employees-editform.php";
?>
  </td>
<td>
  <form method="post" action="employees-by-location.php">
  <input type="hidden" name="eid" value="<?php echo $employees['EmployeeID']; ?>">
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
