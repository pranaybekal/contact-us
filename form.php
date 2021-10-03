<?php
$server="localhost";
$username="root";
$password="";
// replace the database name with your database
$db="contactform"; 



$conn=mysqli_connect($server,$username,$password,$db) or die("error establishing database connection due to ".mysqli_connect_error());
if($conn)
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


$sql="INSERT INTO `form` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
$result=mysqli_query($conn,$sql);
if($result)
echo "submission successful";

?>

