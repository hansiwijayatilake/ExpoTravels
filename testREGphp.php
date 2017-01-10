<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expotravels";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$emp_name = $_POST['emp_name'];


$sql = "INSERT INTO test " . "(emp_name) " . "VALUES('$emp_name')";

    mysqli_select_db('test');
    $retval = mysqli_query($sql, $conn);

    if (!$retval) {
        die('Could not enter data: ' . mysqli_error());
    }

    echo "Entered data successfully\n";

    mysqli_close($conn);

?>


