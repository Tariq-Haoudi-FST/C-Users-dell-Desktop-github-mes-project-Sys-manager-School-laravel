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
    $teacher = $_POST['teacher'];
    $jour= $_POST['day'];
    $creneau = $_POST['timeSlot'];

    $user =  $_POST['user'];
    $details =  $_POST['reason'];

    $sql = "INSERT INTO appointments (student_id ,teacher, jour, creneau, details) VALUES ('$user','$teacher', '$jour', '$creneau', '$details')";

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
