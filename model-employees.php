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

function insertEmp($eLocationID, $eName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO employees (LocationID, EmployeeName) VALUES (?,?)");
        $stmt->bind_param("is", $eLocationID, $eName);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateEmp($eName, $emid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE employees SET EmployeeName = ? WHERE EmployeeID = ?");
        $stmt->bind_param("si", $eName, $emid);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteEmp($emid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM employees WHERE EmployeeID = ?");
        $stmt->bind_param("i", $emid);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
