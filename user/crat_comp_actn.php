<?php
$hname=$_POST["hname"];
$cname=$_POST["cname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$date=$_POST["date"];
mysql_connect("localhost","root","")or die("connection error");
mysql_select_db("dance")or die("database error");
$query="insert into competition(hname,cname,email,phonenum,date) values('$hname','$cname','$email','$phone','$date')";
mysql_query($query);
echo ("Competition Created");
header('location:create_copitation.php');
?>