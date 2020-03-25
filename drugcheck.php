<?php

//Session and connection
session_start();
error_reporting(0);
include 'connect.php';
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;

//update code

$k = 0;
$m = 0;
for($i=0;$i<14;$i++)
{
	$str = "b".$i;
	if(isset($_POST[$str]))
	{
		if($k==0){
			$collection->insertOne(['_id' => 'DRUGSUSED']);
			$k = 1;
		}
		$str1 = "a".$m;
		$collection->updateOne(['_id'=>'DRUGSUSED'], ['$set' => [$str1 => strtoupper($_POST[$str])]]);
		$m +=1;
	}
}
header('Location:page8.php');







?>
