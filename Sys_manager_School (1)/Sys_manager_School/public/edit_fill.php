<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sys_manager_school";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $fill = $_POST['title'];

    $stmt = $conn->prepare("UPDATE filieres SET filiere=? WHERE id = ?");
    $stmt->bind_param('si', $fill, $id);

    if ($stmt->execute()) {
        echo "Announcement updated successfully";
    } else {
        echo "Error updating announcement: " . $stmt->error;
    }

    $stmt->close();
}

$homeUrl = '/admin';
    
    header("Location: $homeUrl");
    $conn->close();
    ?>