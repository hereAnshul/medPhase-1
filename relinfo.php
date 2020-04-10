<?php

//sessions and includes
session_start();
error_reporting(0);
include 'connect.php';
include 'security.php';

//data push
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;
$k=0;
for($i=0;$i<3;$i++){
	$str = "a".$i;
	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'PAST HISTORY OF EYE']);
			$k = 1;
		}
		$collection->updateOne(['_id'=>'PAST HISTORY OF EYE'], ['$set' => [$str => encrypt($_POST[$str])]]);
	}
}
if(isset($_POST['rhythmical'])){
  $collection->insertOne(['_id' => 'RHYTHMICAL']);
  $collection->updateOne(['_id'=>'RHYTHMICAL'], ['$set' => ['Type'=> encrypt($_POST['type'])]]);
}
$k=0;

if(isset($_POST['site'])){
  $collection->insertOne(['_id' => 'SWELLING']);
  $collection->updateOne(['_id'=>'SWELLING'], ['$set' => ["site" => encrypt($_POST['site'])]]);
}

if(isset($_POST['onset'])){
  $collection -> updateOne(['_id' => 'SWELLING'], ['$set' => ['onset' => encrypt($_POST['onset'])]]);
}

for($i=0;$i<5;$i++){
  $str = "b".$i;
  if(isset($_POST[$str])){
    if($k==0){
      $collection->insertOne(['_id' => 'RELASSOSIATEDSYMPTIOMS']);
    }$k=1;
    $collection -> updateOne(['_id' => 'RELASSOSIATEDSYMPTIOMS'], ['$set' => [$str => encrypt($_POST[$str])]]);
  }
}

$k=0;
for($i=0;$i<4;$i++){
	$str = "c".$i;
	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'RELCHARACTER']);
			$k=1;
		}
		$collection->updateOne(['_id'=>'RELCHARACTER'], ['$set' => [$str => encrypt($_POST[$str])]]);
	}
}

header('Location:page6.php');
?>
