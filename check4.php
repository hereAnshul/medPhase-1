<?php

//sessions and include
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
for($i=0;$i<20;$i++)
{
	$str = "a".$i;
	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'PAST HISTORY']);
			$k = 1;
		}
		//$str = "a".$m;
		$collection->updateOne(['_id'=>'PAST HISTORY'],['$set' => [$str => encrypt($_POST[$str])]]);
		//$m+=1;
	}


}
header('Location:page5.php');

?>
