<?php
function SelectRestaurant() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Name, count(e.EmployeeID) as Emp_Count from tacobell t join employees e on e.RestaurantID=t.RestaurantID group by Name");
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
