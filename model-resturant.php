<?php
function SelectRestaurant() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT RestaurantID, Name, Rating, FoodType FROM tacobell");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
