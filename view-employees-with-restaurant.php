<div class= "row">
  <div class = "col">
    <h1>Employees and their Restaurant by Location</h1>
  </div>
  <div class = "col-auto">

    <?php
include "view-employees-with-restaurant-newform.php";
?>
</div>
</div>
<div class="card-group">
  
    
 
      <?php
while ($restaurants = $restaurant->fetch_assoc()) {
  ?>
  <div class="card">
   
    <div class="card-body">
      <h5 class="card-title"><?php echo $restaurants['Name']; ?></h5>
      <p class="card-text">
        <ul class="list-group">
        <?php
        $eid = SelectEmpByLocation($locations['LocationID']);
        while ($eids = $eid->fetch_assoc()) {
          ?>
          <li class="list-group-item"><?php echo $eids['EmployeeID']; ?> - <?php echo $eids['EmployeeName']; ?> - <?php echo $eids['Address']; ?> - <?php echo $eids['City']; ?> - <?php echo $eids['State']; ?> - <?php echo $eids['ZipCode']; ?>
         <form method="post" action="">
                <input type="hidden" name="locid" value="<?php echo $eids['LocationID']; ?>">
                <input type="hidden" name="actionType" value="Delete">
                <button type="submit" class="btn btn-primary" onclick="return confirm('Confirm Changes?');">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
              </svg>
                </button>
              </form>
          
              <?php
include "view-employees-editform.php";
?>
            </li>
          <?php
        }
          
        ?>
          </ul>
        </p>
      <p class="card-text"><small class="text-body-secondary">TacoBell Rating: <?php echo $restaurants['Rating']; ?></small></p>
    </div>
  </div>

      <?php
}
?>
</div>
