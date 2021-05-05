<?php
$name=$_POST["uname"];
$pass=$_POST["pswd"];
mysql_connect("localhost","root","")or die("connection error");
mysql_select_db("dance")or die("database error");
$query="select * from admin where uname='$uname' and passwrd='$pass'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count>0)
{
	$row=mysql_fetch_array($result);
	session_start();
	$_SESSION['aid']=$row['0'];
	header('location:login.php');
}
else
{
header('location:action.php');
}
?>