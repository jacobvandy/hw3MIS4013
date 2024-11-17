<h1>Taco Bells</h1>

<div>
  <canvas id="myChart"></canvas>
</div>

 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

     


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'pie',
    data: {
    datasets: [{
        data: [
<?php
while ($resturants = $restaurant->fetch_assoc()) {
    echo $resturants['Emp_Count'] . ", ";
}
  ?> 
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$resturant = SelectRestaurant();
while ($resturants = $restaurant->fetch_assoc()) {
    echo "'" . $resturants['Name'] . "', ";
}
  ?>
    ]
},
    
  });
</script>
 
