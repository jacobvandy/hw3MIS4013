




     


<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.11.0/math.min.js"></script>



 <h1>Prices Summary</h1>
  


<div id="priceSummary">
    <h3>Price Summary</h3>
    <p id="minPrice">Loading...</p>
    <p id="maxPrice">Loading...</p>
</div>

<script>
    // Define prices array directly using PHP
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

    // Use math.js to calculate the minimum and maximum prices
    const minPrice = math.min(prices);
    const maxPrice = math.max(prices);

    // Update the DOM with the calculated values
    document.getElementById('minPrice').textContent = `Minimum Price: $${minPrice.toFixed(2)}`;
    document.getElementById('maxPrice').textContent = `Maximum Price: $${maxPrice.toFixed(2)}`;
</script>
