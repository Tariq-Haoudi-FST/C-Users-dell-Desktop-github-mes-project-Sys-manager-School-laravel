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
    $name = $_POST['name'];
    $adr = $_POST['adr'];
    $date = $_POST['date'];
    $cin = $_POST['cin'];
    $fill = $_POST['fill'];
    $dept = $_POST['dept'];
    $stmt = $conn->prepare("UPDATE professors SET nom_prenom=?, adresse=?, date_de_naissance=?, cin=?,filiere=?, department=? WHERE id = ?");
    if (!$stmt) {
        die('Error in prepare statement: ' . $conn->error);
    }
    $stmt->bind_param('ssssssi', $name, $adr, $date, $cin, $fill, $dept, $id);

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
