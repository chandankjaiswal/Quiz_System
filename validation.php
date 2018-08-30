<?php

session_start();

$con= mysqli_connect('localhost','root');

if($con){
	echo "connection successful";

}
else {
	echo "no connection";
}
mysqli_select_db($con,'quizdbase');

$username=$_POST['user'];
$pass=$_POST['password'];

$q= " select * from users where username ='$username' AND password='$pass' ";   

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['username'] = $username;
     header('location:home.php');
}else
{
	header('location:login.php');
}
?>