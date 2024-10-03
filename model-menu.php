<?php
function SelectMenu() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT MenuItemID, ItemName, Price FROM menuitems");
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
