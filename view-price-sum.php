




     


<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.11.0/math.min.js"></script>

<script src="https://cdn.plot.ly/plotly-2.20.0.min.js"></script>


 <h1>Prices Summary</h1>
  


<div id="priceSummary">
    <h3>Price Summary</h3>
    <p id="minPrice">Loading...</p>
    <p id="maxPrice">Loading...</p>
</div>

<h2>Price Distribution</h2>
<div id="pricePieChart" style="width: 600px; height: 400px;"></div>

<script>
    // Define prices array directly using PHP
    const prices = [
        <?php
        $first = true;
        while ($menus1 = $menu1->fetch_assoc()) {
            if (!$first) echo ", ";
            echo $menus1['Price'];
            $first = false;
        }
        ?>
    ];

    console.log("Prices:", prices);

    // Use math.js to calculate the minimum and maximum prices
    const minPrice = math.min(prices);
    const maxPrice = math.max(prices);

    // Update the DOM with the calculated values
    document.getElementById('minPrice').textContent = `Minimum Price: $${minPrice.toFixed(2)}`;
    document.getElementById('maxPrice').textContent = `Maximum Price: $${maxPrice.toFixed(2)}`;

     const pieData = [{
        values: prices,
        labels: prices,
        type: 'pie'
    }];

    const pieLayout = {
        title: 'Price Distribution',
        height: 400,
        width: 600
    };

    Plotly.newPlot('pricePieChart', pieData, pieLayout);
</script>
