<?php
$servername = "localhost";
$username = "root";
$password = "system";
$dbname = "devoprfl_operation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT order_id,status FROM uc_order_management_detail";
$result = $conn->query($sql);
$output = [];
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "order_id: " . $row["order_id"]. " - status: " . $row["status"]. "<br>";
        $output[] = [
            'order_id'=>$row["order_id"],
            'status'=>$row["status"]
                ];
    }
    echo json_encode($output);
} else {
    echo "0 results";
}
$conn->close();
?>