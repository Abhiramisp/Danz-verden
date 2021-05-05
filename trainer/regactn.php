<?php
$name=$_POST["name"];
$phone=$_POST["phone_number"];
$email=$_POST["email"];
$pass=$_POST["pass1"];
$typ=$_POST["typ"];
mysql_connect("localhost","root","")or die("connection error");
mysql_select_db("dance")or die("database error");
$query="select * from trainer where email='$email' and psswrd='$pass'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count>0 && strlen($phone) < 10 || strlen($phone) > 14)
{
	header('location:action.php');
}
else
{
	$query="insert into trainer(tname,phonenum,email,psswrd,type) values('$name','$phone','$email','$pass','$typ')";
	mysql_query($query);
	header('location:action.php');
}
?>