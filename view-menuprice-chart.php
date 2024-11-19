




     
<script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
<script src="https://d3js.org/d3.v7.min.js"></script>

<h1>Menu and their Prices</h1>

<div id="menuChart" style="width: 600px; height: 400px;"></div>

<div id="priceSummary">
    <h3>Price Summary</h3>
    <p id="minPrice"></p>
    <p id="maxPrice"></p>
</div>

<script>
    <?php
    // Prepare data from the database
    $prices = [];
    $itemNames = [];
    while ($menus = $menu->fetch_assoc()) {
        $prices[] = $menus['Price'];
        $itemNames[] = addslashes($menus['ItemName']);
    }
    ?>
    // Data from PHP
    const prices = <?php echo json_encode($prices); ?>;
    const itemNames = <?php echo json_encode($itemNames); ?>;

    // Use D3 to calculate min and max
    const minPrice = d3.min(prices);
    const maxPrice = d3.max(prices);

    // Display min and max prices
    document.getElementById('minPrice').textContent = `Minimum Price: $${minPrice.toFixed(2)}`;
    document.getElementById('maxPrice').textContent = `Maximum Price: $${maxPrice.toFixed(2)}`;

    // ECharts bar chart setup
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
