<?php

$db=mysql_connect("localhost","root","123");
mysql_select_db("clzl",$db);
$sql3="select * from cl where clnum='".$_POST['clnum']."'";
$sql1="insert into order1 values('".$_POST['clnum']."','送车上门','".$_POST['zuchead']."','".$_POST['phonenumber']."','".$_POST['zcdate']."','".$_POST['tianshu']."')";
$sql2="insert into order1 values('".$_POST['clnum']."','门店自提','".$_POST['mdad']."','".$_POST['phonenumber']."','".$_POST['zcdate']."','".$_POST['tianshu']."')";
$sql4="update cl set amount=amount-1 where clnum=clnum='".$_POST['clnum']."'";
$r=mysql_query($sql3);
$clinfo = mysql_fetch_array($r); 
$sl=$clinfo["amount"]; 
$rent=$clinfo["rent"];
if($sl>=1)
{
echo "您所需支付的金额为";
echo $rent*$_POST["tianshu"];

	if($_POST['fs']==1)
	{
	mysql_query($sql1);
	echo "<br><br>恭喜您下订单成功！我们将会提供送车上门服务";
	mysql_query($sql4);
	}
	else if($_POST['fs']==2)
		{
		mysql_query($sql2);
		
		echo "<br><br>恭喜您下订单成功！请您于合适时间内到门店自提";
		mysql_query($sql4);
		}
	
}
else echo "车辆数量不足，请选择其他车辆！";


mysql_close($db);
?>
