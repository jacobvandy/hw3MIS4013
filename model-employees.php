<?php
function SelectEmployees() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT EmployeeID, LocationID, EmployeeName FROM employees");
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
