<?php
session_start();
$db=mysql_connect("localhost","root","123");
mysql_select_db("clzl",$db);  
$sql="select * from users where phonenumber='".$_POST['yhm']."'and mima='".$_POST['mima']."'";
$r=mysql_query($sql);
if(mysql_num_rows($r)>=1)
  {
     echo"登录成功！";
     $_SESSION['usename']=$_POST['yhm'];
     echo "<a href=order.html>下订单";
echo "<a href=show.php>查看是否可以以租代购";
    // die("<p><a href = show.php>显示所有数据</a><p>")
   }
else
   echo"错误！";

mysql_close($db);





?>