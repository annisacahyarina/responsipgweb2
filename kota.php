<?php
$Nama_Tempat = $_POST['Nama_Tempat'];
$Alamat = $_POST['Alamat'];
$No_Telpon = $_POST['No_Telpon'];
$Kota = $_POST['Kota'];
$Provinsi = $_POST['Provinsi'];

// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiweb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO kotalain (Nama_Tempat, Alamat, No_Telpon, Kota, Provinsi)
VALUES ('$Nama_Tempat', '$Alamat', '$No_Telpon', '$Kota', '$Provinsi')";
if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//header("Location: index.html");
//exit;
?>