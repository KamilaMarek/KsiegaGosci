<?php
require_once 'connect.php';
$conn = new mysqli($host,$user,$password,$db);
$name = $_POST['fname'];
$surname = $_POST['lname'];
$email = $_POST['mailaddr'];
$per_content = $_POST['content'];
$date_of_birth = $_POST['date_of_birth'];

$sql = "INSERT INTO guest_list (name, surname, email, per_content, date_of_birth) VALUES ('$name', '$surname', '$email', '$per_content', '$date_of_birth')";

$conn->query($sql);
$conn->close();
header("Location: index.php");

?>