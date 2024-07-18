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
    $name = $_POST['name'];
    $adr = $_POST['adr'];
    $date = $_POST['date'];
    $cin = $_POST['cin'];
    $fill = $_POST['fill'];
    $dept = $_POST['dept'];


    $sql = "INSERT INTO professors (nom_prenom, adresse,date_de_naissance,cin, filiere, department) VALUES ( '$name' ,'$adr','$date','$cin' ,'$fill','$dept')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$homeUrl = '/admin';

header("Location: $homeUrl");

$conn->close();
?>
