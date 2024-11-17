

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


     
 <h1>Menu and their Prices</h1>
    <div id="chart"></div>

    <?php
 
    $menu = SelectMenu();


    $prices = [];
    $itemNames = [];
    while ($menus = $menu->fetch_assoc()) {
        $prices[] = $menus['Price']; 
        $itemNames[] = '"' . addslashes($menus['ItemName']) . '"'; 
    }
    ?>

    <script>

    var options = {
        series: [{
            data: [<?php echo implode(',', $prices); ?>] 
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
            categories: [<?php echo implode(',', $itemNames); ?>]
        }
    };

    // Render the chart
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
    </script>
