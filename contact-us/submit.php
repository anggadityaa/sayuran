<?php 
$connect = mysqli_connect("localhost", "root", "", "contactus");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$submit = $_POST['submit'];

$query = "INSERT INTO contactus VALUES ('$name','$email','$message','$submit')";

mysqli_query($connect, $query);

header("Location: contact-us.php")

?>