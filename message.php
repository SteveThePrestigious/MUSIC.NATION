<?php
include 'database.php';
 
$fullName=$_POST['fullName'];
$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];

//users==table_name in database
$sql="INSERT INTO registeration(FirstName,Email,Number,Message) VALUES('$fullName','$email','$number','$message')";
$result=mysqli_query($conn, $sql);
if($result){
    header('location: ./index.php');
}
echo "<h1>succesfully</h1>";
echo "<hr>";
?>