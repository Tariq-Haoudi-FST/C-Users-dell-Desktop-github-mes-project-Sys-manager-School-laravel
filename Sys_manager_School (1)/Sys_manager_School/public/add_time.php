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
    $fill = $_POST['fill'];
    $dept = $_POST['dept'];
    $user = $_POST['user'];

    $uploadedFiles = [];
    $targetDirectory = "uploads/";


    foreach ($_FILES['certificates']['name'] as $key => $filename) {
        $targetFile = $targetDirectory . basename($filename);
        move_uploaded_file($_FILES['certificates']['tmp_name'][$key], $targetFile);
        $uploadedFiles[] = $targetFile;
    }
    $sql = "INSERT INTO timetables (student_id, filiere,  department, image) VALUES ('$user', '$fill' ,'$dept', '" . implode(',', $uploadedFiles) . "')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$homeUrl = '/chefd';

// Perform the redirect
header("Location: $homeUrl");


// Close connection
$conn->close();
?>
