<?php
include 'conndb.php';
$uid=$_GET['uid'];
// $uid=9246;

$conn=dbcon();
$bid=array();
$sql="select bid from scan where uid='".$uid."'";

$result=$conn->query($sql);

$cr=array();
while($row=$result->fetch_assoc()){
array_push($bid,$row['bid']);
$sql2="select credit from pay where bid='".$row['bid']."'";
$result2=$conn->query($sql2);
$rw=$result2->fetch_assoc();
array_push($cr,$rw['credit']);


}
$retur=array("BID\t\t\t\t\t\tCredit");

for($i=0;$i<sizeof($bid);$i++)
{
	array_push($retur,"$bid[$i]\t\t\t\t$cr[$i]");
}

for($i=0;$i<sizeof($retur);$i++)
{
	echo $retur[$i]."\n";
}






?>