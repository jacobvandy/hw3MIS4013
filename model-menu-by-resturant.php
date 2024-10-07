<?php
function SelectMenuByRestaurant($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT mi.MenuItemID, ItemName, Price, City, State, Address FROM menuitems mi join locations l on mi.LocationID = l.LocationID WHERE mi.RestaurantID = ?");
        $stmt->bind_param("i", $iid);
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
