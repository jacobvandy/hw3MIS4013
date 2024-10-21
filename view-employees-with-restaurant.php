<h1>Employees and their Taco Bell by Location</h1>
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
        $eid = SelectEmpByLocation($restaurants['RestaurantID']);
        while ($eids = $eid->fetch_assoc()) {
          ?>
          <li class="list-group-item"><?php echo $eids['EmployeeID']; ?> - <?php echo $eids['EmployeeName']; ?> - <?php echo $eids['Address']; ?> - <?php echo $eids['City']; ?> - <?php echo $eids['State']; ?> - <?php echo $eids['ZipCode']; ?></li>

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
