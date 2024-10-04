<h1>Taco Bells employees</h1>
<div class="card-group">
  
    
 
      <?php
while ($restaurants = $restaurant->fetch_assoc()) {
  ?>
  <div class="card">
   
    <div class="card-body">
      <h5 class="card-title"><?php echo $resturants['Name']; ?></h5>
      <p class="card-text">
        <ul class="list-group">
        <?php
        $menu = SelectMenuByRestaurant($restaurants['RestaurantID'];);
        while ($menus = $menu->fetch_assoc()) {
          ?>
          <li class="list-group-item"><?php echo $menus['ItemName']; ?> - <?php echo $menus['Price']; ?> - <?php echo $menus['State']; ?></li>

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
