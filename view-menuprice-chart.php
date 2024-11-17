<h1>Menu and their Prices</h1>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


     


<script>
 var options = {
          series: [{
          data: [
<?php
while ($menus = $menu->fetch_assoc()) {
    echo $menus['Price'];
}
  ?> 
]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            borderRadiusApplication: 'end',
            horizontal: true,
          }
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: [<?php
$menu = SelectMenu();
while ($menus = $menu->fetch_assoc()) {
    echo $menus['ItemName'];
}
  ?> ],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>



