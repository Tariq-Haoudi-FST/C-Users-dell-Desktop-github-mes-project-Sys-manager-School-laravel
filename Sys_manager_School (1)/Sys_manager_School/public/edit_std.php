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
    $cm = $_POST['massar'];
    $fill = $_POST['fill'];
    $grp = $_POST['group'];
    $stmt = $conn->prepare("UPDATE student_classes SET nom_prenom=?, adresse=?, date_de_naissance=?, cin=?,code_massar=?,filiere=?, Groupe=? WHERE id = ?");
    if (!$stmt) {
        die('Error in prepare statement: ' . $conn->error);
    }
    $stmt->bind_param('sssssssi', $name, $adr, $date, $cin, $cm, $fill, $grp, $id);

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
