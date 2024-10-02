<?php
function SelectRestaurant() {
    $conn = null; // Initialize the connection variable to null to handle it safely later
    try {
        $conn = get_db_connection();
        if ($conn === null) {
            throw new Exception('Database connection could not be established.');
        }
        $stmt = $conn->prepare("SELECT RestaurantID, Name, Rating, FoodType FROM tacobell");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    } catch (Exception $e) {
        // Add error logging or handling here if needed
        error_log($e->getMessage());
        throw $e;
    } finally {
        // Ensure the connection is closed properly
        if ($conn !== null) {
            $conn->close();
        }
    }
}
?>
