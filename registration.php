<?php

session_start();
header('location:login.php');

$con= mysqli_connect('localhost','root');

if($con){
	echo "connection successful";

}
else {
	echo "no connection";
}
mysqli_select_db($con,'quizdbase');

$username=$_POST['user'];
$reg_no=$_POST['reg'];
$Dept=$_POST['dept'];
$Email=$_POST['email'];
$Mobile=$_POST['mobile'];
$Gender=$_POST['gender'];
$pass=$_POST['password'];


$q= " select * from users where username ='$username' AND password='$pass' ";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
	echo "duplicate data";
}else
{
	$qy = "insert into users(username,reg_no,dept,email,mobile,sex,password) values ('$username','$reg_no','$Dept','$Email','$Mobile','$Gender','$pass')";
	mysqli_query($con,$qy);
	echo "Successfully registered";
}
?>