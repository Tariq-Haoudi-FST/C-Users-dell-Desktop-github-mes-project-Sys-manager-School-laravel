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
    $jour = $_POST['day'];
    $creneau = $_POST['timeSlot'];
    $reason = $_POST['reason'];
    $user = $_POST['user'];

    $uploadedFiles = [];
    $targetDirectory = "uploads/";


    foreach ($_FILES['certificates']['name'] as $key => $filename) {
        $targetFile = $targetDirectory . basename($filename);
        move_uploaded_file($_FILES['certificates']['tmp_name'][$key], $targetFile);
        $uploadedFiles[] = $targetFile;
    }

    $sql = "INSERT INTO  absences (student_id, jour, creneau, reason, fileUpload) VALUES ('$user','$jour','$creneau' ,'$reason', '" . implode(',', $uploadedFiles) . "')";

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
