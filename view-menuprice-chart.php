




     
<script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>





 <h1>Menu and their Prices</h1>
  

<div id="menuChart" style="width: 600px; height: 400px;"></div>


<script>
     

     
    <?php
    $prices = [];
    $itemNames = [];
    while ($menus = $menu->fetch_assoc()) {
        $prices[] = $menus['Price'];
        $itemNames[] = addslashes($menus['ItemName']);
    }
    ?>
    const prices = <?php echo json_encode($prices); ?>;
    const itemNames = <?php echo json_encode($itemNames); ?>;

  
    const chartDom = document.getElementById('menuChart');
    const myChart = echarts.init(chartDom);

    const option = {
        title: { text: 'Menu Prices', left: 'center' },
        tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
        xAxis: { type: 'category', data: itemNames },
        yAxis: { type: 'value', name: 'Price ($)' },
        series: [{
            name: 'Price',
            type: 'bar',
            data: prices,
            itemStyle: { color: '#5470C6' }
        }]
    };

    myChart.setOption(option);
     


</script>

