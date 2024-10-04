<?php
function SelectLocationsByMenu($lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT mi.LocationID, mi.RestaurantID, Price, City, State, Address FROM menuitems mi join locations l
on mi.LocationID = l.LocationID
WHERE mi.MenuItemID = ?");
        $stmt->bind_param("i", $lid);
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
