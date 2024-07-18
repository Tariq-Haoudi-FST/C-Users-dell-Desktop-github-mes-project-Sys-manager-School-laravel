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
    $title = $_POST['title'];
    $description = $_POST['details'];

    $stmt = $conn->prepare("UPDATE announcements SET title=?, content=? WHERE id = ?");
    $stmt->bind_param('ssi', $_POST['title'], $_POST['details'], $_POST['id']);

    if ($stmt->execute()) {
        echo "Announcement updated successfully";
    } else {
        echo "Error updating announcement: " . $stmt->error;
    }

    $stmt->close();
}

 $homeUrl = '/cheff';
    
    header("Location: $homeUrl");
    $conn->close();
    ?>
