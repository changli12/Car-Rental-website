<center>
<?php
$db=mysql_connect("localhost","root","123");
mysql_select_db("clzl",$db);  
$a=$_POST["choose"];
if($a==1)
{
$sql="select * from cl where clxx like '%".$_POST['select']."%'";
$r=mysql_query($sql);
}
else if($a==2)
	{$sql2="select * from cl where rent<='".$_POST['select']."'";
	$r=mysql_query($sql2);}
else if($a==3)
	{$sql3="select * from cl where price<='".$_POST['select']."'";
	$r=mysql_query($sql3);}
while($h=mysql_fetch_row($r))
{
echo "<table><tr><td>车辆编号</td><td>相关信息</td><td>一日租金</td><<td>总价</td><td>空余数量</td></tr> ";
echo "<tr><td>";
echo $h[0]."号";
echo "</td><td>";
echo $h[1];
echo "</td><td>";
echo $h[2]."元";
echo "</td><td>";
echo $h[3]."元";
echo "</td><td>";
echo $h[4]."辆";
echo "</td></tr>";
}
echo "</table>";
mysql_close($db);
?>
</center>
