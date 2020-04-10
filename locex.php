<?php

//session and connection
session_start();
error_reporting(0);
include 'connect.php';
include 'security.php';
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;

//value push
if($_POST['HEADPOS']!=""){
  	$collection->insertOne(['_id' => 'HEADPOS', 'headposition' => encrypt($_POST['HEADPOS'])] );
}

if(isset($_POST['sizeshape'])){
  $collection->insertOne(['_id' => 'EYESHAPE']);
  if(isset($_POST['Exopthalmos'])){
    $ae = "null";
    $rnr = 'null';
    if(isset($_POST['ae'])){
      $ae = $_POST['ae'];
    }
    if(isset($_POST['rnr'])){
      $rnr = $_POST['rnr'];
    }
    $collection->updateOne(['_id' => 'EYESHAPE'], ['$set' => ['EXOPTHALMOS' => ['A/E' => encrypt($_POST['ae']), 'R/NR' => encrypt($_POST['rnr'])]]]);
  }
  if(isset($_POST['enophthalmos'])){
    $collection->updateOne(['_id' => 'EYESHAPE'], ['$set' => ['ENOPHTHALMOS' => encrypt('True')]]);
  }
  if(isset($_POST['buphthalmos'])){
    $collection->updateOne(['_id' => 'EYESHAPE'], ['$set' => ['BUPHTHALMOS' => encrypt('True')]]);
  }
  if(isset($_POST['microphthalmos'])){
    $collection->updateOne(['_id' => 'EYESHAPE'], ['$set' => ['MICROPHTHALMOS' => encrypt('True')]]);
  }
  if(isset($_POST['pthisisbulbi'])){
    $collection->updateOne(['_id' => 'EYESHAPE'], ['$set' => ['PTHISISBULBI' => encrypt('True')]]);
  }
}

//missing for movement .... not missing anymore...
$k = 0;
for($i=0;$i<6;$i++)
{
	$str = "mov".$i;

	if(strcmp($_POST[$str],"")!=0)
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'MOVEMENT']);
			$k = 1;
		}
		$str1 = "status".$i;
		$collection->updateOne(['_id'=> 'MOVEMENT'], ['$set' => [$_POST[$str] => encrypt($_POST[$str1])]]);
	}
}


$phoria = "null";
$tropia = 'null';
if($_POST['phoria']!="" OR $_POST['tropia']!=""){
  $phoria = $_POST['phoria'];
  $tropia = $_POST['tropia'];
  $collection->insertOne(['_id' => 'MISALIGNMENT', 'PHORIA' => encrypt($phoria), 'TROPIA' => encrypt($tropia)]);
}

header('Location:page10.php');

?>
