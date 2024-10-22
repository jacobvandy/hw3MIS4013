
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

function insertEmpLoc($elLocationID $elName, $elAddress, $elCity, $elState, $elZipCode) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO employees (LocationID, EmployeeName) VALUES (?,?)");
        $stmt->bind_param("is", $elLocationID, $elName);
        $success =  $stmt->execute();

        $stmt = $conn->prepare("INSERT INTO locations (Address, City, State, Zipcode) VALUES (?,?,?,?)");
        $stmt->bind_param("sssi", $elAddress, $elCity, $elState, $elZipCode );
        $success =  $stmt->execute();
        
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
