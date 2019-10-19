<?php
session_start();
//if($_SESSION['username']!="")

//if(isset($_SESSION['usename']))
//{
$yhm=$_SESSION['usename'];
$db=mysql_connect("localhost","root","123");
mysql_select_db("clzl",$db);  
$sql="select sum(a.price*b.tianshu) as a from cl a,order1 b,users c where a.clnum=b.clnum and c.name='".$yhm."'";
$r=mysql_query($sql);
$show= mysql_fetch_array($r);
$a=$clinfo["a"]; 
echo "累计费用为".$a;
//}

//else
//echo "请先登录！";



?>
<body background=http://img5.imgtn.bdimg.com/it/u=1613453666,1582577775&fm=21&gp=0.jpg>