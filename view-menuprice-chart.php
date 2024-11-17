

<script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>


     
 <h1>Menu and their Prices</h1>
  



<script>


   
    const chartDom = document.getElementById('menuChart');
    const myChart = echarts.init(chartDom);


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
            data: <?php
$menu = SelectMenu();

while ($menus = $menu->fetch_assoc()) {
    echo $menus['ItemName'];
}
?>
        },
        yAxis: {
            type: 'value',
            name: 'Price ($)'
        },
        series: [{
            name: 'Price',
            type: 'bar',
            data: <?php
$menu = SelectMenu();

while ($menus = $menu->fetch_assoc()) {
    echo $menus['price'];
}
?>,
            itemStyle: {
                color: '#5470C6'
            }
        }]
    };


    myChart.setOption(option);
</script>
