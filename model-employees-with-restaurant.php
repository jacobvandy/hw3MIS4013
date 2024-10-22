
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

function insertEmpLoc($elEmployeeID, $elEmployeeName, $elAddress, $elCity, $elState, $elZipCode) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO locations (EmployeeID, EmployeeName, Address, City, State, Zipcode) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issssi", $elEmployeeID, $elEmployeeName, $elAddress, $elCity, $elState, $elZipCode );
        $success =  $stmt->execute();
        
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateEmpLoc($elEmployeeID, $elEmployeeName, $elAddress, $elCity, $elState, $elZipCode, $locid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE locations SET EmployeeID = ?, EmployeeName = ?, Address = ?, City= ?, State= ?, ZipCode= ? WHERE LocationID = ?");
        $stmt->bind_param("issssii", $elEmployeeID, $elEmployeeName, $elAddress, $elCity, $elState, $elZipCode, $locid);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteEmpLoc($locid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM locations WHERE LocationID = ?");
        $stmt->bind_param("i", $locid);
        $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
