




     
<script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/simple-statistics@7.9.0/dist/simple-statistics.min.js"></script> 


 <h1>Menu and their Prices</h1>
  

<div id="menuChart" style="width: 600px; height: 400px;"></div>

<div id="priceSummary">
    <h3>Price Summary</h3>
    <p id="minPrice"></p>
    <p id="maxPrice"></p>
</div>

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
        title: { text: 'Menu Prices (using echart library)', left: 'center' },
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

<script>

     const prices = [
        <?php
        $first = true;
        while ($menus = $menu->fetch_assoc()) {
            if (!$first) echo ", ";
            echo $menus['Price'];
            $first = false;
        }
        ?>
    ];

    console.log("Prices:", prices);
     
   const minPrice = ss.min(prices);
    const maxPrice = ss.max(Prices);

    // Display min and max prices
    document.getElementById('minPrice').textContent = `Minimum Price: $${minPrice)}`;
    document.getElementById('maxPrice').textContent = `Maximum Price: $${maxPrice}`;
</script>
