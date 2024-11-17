

<script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>


     
 <h1>Menu and their Prices</h1>
  

<?php

$menu = SelectMenu();
$prices = [];
$itemNames = [];
while ($menus = $menu->fetch_assoc()) {
    $prices[] = $menus['Price'];
    $itemNames[] = addslashes($menus['ItemName']);
}


echo "
<script>
    // ECharts instance initialization
    const chartDom = document.getElementById('menuChart');
    const myChart = echarts.init(chartDom);

    // Chart configuration
    const option = {
        title: {
            text: 'Menu Prices',
            left: 'center'
        },
        tooltip: {
            trigger: 'axis',
            axisPointer: { type: 'shadow' }
        },
        xAxis: {
            type: 'category',
            data: " . json_encode($itemNames) . "
        },
        yAxis: {
            type: 'value',
            name: 'Price ($)'
        },
        series: [{
            name: 'Price',
            type: 'bar',
            data: " . json_encode($prices) . ",
            itemStyle: {
                color: '#5470C6'
            }
        }]
    };

    // Render the chart
    myChart.setOption(option);
</script>
";
