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

function insertMenu($miName, $rPrice) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO menuitems (ItemName, Price) VALUES (?, ?)");
        $stmt->bind_param("sd", $miName, $rPrice);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateMenu($miName, $miPrice, $mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE menuitems SET ItemName = ?, Price = ? WHERE MenuItemID = ?");
        $stmt->bind_param("sdi", $miName, $miPrice, $mid);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletemenu($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM menuitems WHERE MenuItemID = ?");
        $stmt->bind_param("i", $mid);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
