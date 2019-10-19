<?php
$db=mysql_connect("localhost","root","123");
mysql_select_db("clzl",$db);
$sql="insert into users values('".$_POST['name']."','".$_POST['xb']."','".$_POST['mima']."','".$_POST['phonenumber']."','".$_POST['email']."','".$_POST['address']."')";
$sql2="insert into users values('"1"','"雪铁"','".$_POST['mima']."','".$_POST['phonenumber']."','".$_POST['email']."','".$_POST['address']."')";
mysql_query($sql);
echo $_POST["name"];
echo "恭喜您注册成功！";
mysql_close($db);
?>