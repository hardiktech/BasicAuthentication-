<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$conn=mysqli_connect('localhost','root','','testdb');
$query="select * from members where email='$email' and password='$password'";
$rs=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($rs)){
	$_SESSION['id']=$row['id'];
header("location:profile.php");
}
?>
