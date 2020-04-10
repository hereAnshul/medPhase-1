<?php
session_start();
error_reporting(0);
include 'connect.php';
include 'security.php';
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;

$k = 0;
$m = 0;
for($i=0;$i<6;$i++)
{
	$str = "b".$i;

	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'HISTORY OF EXPOSURE']);
			$k = 1;
		}
		$str1 = "a".$m;
		$collection->updateOne(['_id'=>'HISTORY OF EXPOSURE'],['$set' => [$str1 => encrypt($_POST[$str])]]);
		$m+=1;
	}
}
$r = 0;
$n = 0;
for($i=0;$i<4;$i++)
{
	$str = "a".$i;
	if(isset($_POST[$str]))
	{
		if($r==0)
		{
			$collection->insertOne(['_id' => 'FAMILY HISTORY']);
			$r = 1;
		}
		$str1 = "a".$n;
		$collection->updateOne(['_id'=>'FAMILY HISTORY'],['$set' => [$str1 => encrypt($_POST[$str])]]);
		$n +=1;
	}
}
header('Location:page9.php');



?>
