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


function insertRestaurant($rName, $rRating, $rFoodType) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO TacoBell (Name, Rating, FoodType) VALUES (?, ?, ?)");
        $stmt->bind_param("sds", $rName, $rRating, $rFoodType);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateRestaurant($rName, $rRating, $rFoodType, $rid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE TacoBell SET 'Name' = ?, 'Rating' = ?, 'FoodType' = ? WHERE RetaurantID = ?");
        $stmt->bind_param("sdsi", $rName, $rRating, $rFoodType, $rid);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteRestaurant($rid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM tacobell WHERE RestaurantID = ?");
        $stmt->bind_param("i", $rid);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
