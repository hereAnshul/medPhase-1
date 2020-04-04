<?php

//session and connection
session_start();
error_reporting(0);
include 'connect.php';
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;

//data push

//irisProperties
$m = 0;
$k = 0;
for($i=0;$i<6;$i++)
{
	$str = "ip".$i;

	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'IRIS']);
			$k = 1;
		}
		$str1 = "ip".$m;
		$collection->updateOne(['_id'=>'IRIS'], ['$set' => [$str1 => strtoupper($_POST[$str])]]);
		$m+=1;
	}
}

//pupilProperties
$m = 0;
$k = 0;
for($i=0;$i<6;$i++)
{
	$str = "pp".$i;

	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'PUPIL']);
			$k = 1;
		}
		$str1 = "pp".$m;
		$collection->updateOne(['_id'=>'PUPIL'], ['$set' => [$str1 => strtoupper($_POST[$str])]]);
		$m+=1;
	}
}

//LensProperties
$m = 0;
$k = 0;
for($i=0;$i<5;$i++)
{
	$str = "lp".$i;

	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'LENS']);
			$k = 1;
		}
		$str1 = "lp".$m;
		$collection->updateOne(['_id'=>'LENS'], ['$set' => [$str1 => strtoupper($_POST[$str])]]);
		$m+=1;
	}
}

//AnteriorChamber Properties
$m = 0;
$k = 0;
for($i=0;$i<4;$i++)
{
	$str = "ac".$i;

	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'ANTERIROCHAMBER']);
			$k = 1;
		}
		$str1 = "ac".$m;
		$collection->updateOne(['_id'=>'ANTERIROCHAMBER'], ['$set' => [$str1 => strtoupper($_POST[$str])]]);
		$m+=1;
	}
}


$chk = $collection -> findOne(['_id'=>'CORNEA']);
if (empty($chk)) {
    $collection -> insertOne(['_id'=>'CORNEA']);
}

if(isset($_POST['visualacuity'])){
  $collection->updateOne(["_id"=>'CORNEA'], ['$set' => ['visualacuity' => strtoupper($_POST['visualacuity'])]]);
}

if(isset($_POST['corneaShape'])){
  $collection->updateOne(["_id"=>'CORNEA'], ['$set' => ['corneaShape' => strtoupper($_POST['corS'])]]);
}

if(isset($_POST['curvature'])){
  $collection->updateOne(["_id"=>'CORNEA'], ['$set' => ['curvature' => strtoupper($_POST['curve'])]]);
}

$m = 0;
$k = 0;
for($i=0;$i<3;$i++)
{
	$str = "tp".$i;

	if(isset($_POST[$str]))
	{
		$str1 = "tp".$m;
		$collection->updateOne(['_id'=>'CORNEA'], ['$set' => ['thickness' => strtoupper($_POST[$str])]]);
		$m+=1;
	}
}


if(isset($_POST['vascularization'])){
  $collection->updateOne(["_id"=>'CORNEA'], ['$set' => ['vascularization' => strtoupper('exist')]]);
}

if(isset($_POST['deposits'])){
  $collection->updateOne(["_id"=>'CORNEA'], ['$set' => ['deposits' => strtoupper($_POST['dt'])]]);
}

header('Location:page12.php');
 ?>
