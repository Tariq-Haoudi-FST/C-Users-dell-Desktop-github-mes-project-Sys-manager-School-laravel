<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sys_manager_school";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dept = $_POST['department'];
    $material = $_POST['material'];

    $user =  $_POST['user'];
    $details =  $_POST['reason'];

    $sql = "INSERT INTO  report (student_id ,department, material, details) VALUES ('$user','$dept','$material', '$details')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$homeUrl = '/student';

header("Location: $homeUrl");
$conn->close();
?>
