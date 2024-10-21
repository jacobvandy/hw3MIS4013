

<?php
function SelectEmpByLocation($eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT e.EmployeeID, e.EmployeeName, l.Address, l.City, l.State, l.ZipCode
FROM Employees e
JOIN Locations l ON e.LocationID = l.LocationID
WHERE e.EmployeeID = ?");
        $stmt->bind_param("i", $eid);
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
