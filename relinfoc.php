<?php

//Session and connection
session_start();
error_reporting(0);
include 'connect.php';
include 'security.php';
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;


//writing data to db
if(isset($_POST['dischargefromeye'])){
  $collection->insertOne(['_id' => 'DISCHARGEFM']);
  $collection->updateOne(['_id' => 'DISCHARGEFM'], ['$set' => ['discharge' => encrypt($_POST['dischargefromeye'])]]);
}

$k=0;
for($i=0;$i<7;$i++){
  $str = "a".$i;
  if(isset($_POST[$str])){
    if($k==0){
      $collection->insertOne(['_id' => 'DISCHARGERELATED']);
    }
    $abc = "a".$k;
    $collection -> updateOne(['_id' => 'DISCHARGERELATED'], ['$set' => [$abc => encrypt($_POST[$str])]]);
    $k += 1;
  }
}



if(isset($_POST['FEV'])){
  $collection->insertOne(['_id' => 'FEVER']);
  if(isset($_POST['fevfactor'])){
    $collection -> updateOne(['_id' => 'FEVER'], ['$set' => ['FEVERFACTOR' => encrypt($_POST['fevfactor'])]]);
  }
}

if(isset($_POST['malaise'])){
  $collection->insertOne(['_id' => 'MALAISE']);
  $collection->updateOne(['_id' => 'MALAISE'], ['$set' => ['duration' => encrypt($_POST['malaise'])]]);
}

if(isset($_POST['anisocoria'])){
  $collection->insertOne(['_id' => 'ANISOCORIA']);
  $collection->updateOne(['_id' => 'ANISOCORIA'], ['$set' => ['duration' => encrypt($_POST['anisocoria'])]]);
}

$k=0;
for($i=0;$i<3;$i++){
  $str = "b".$i;
  if(isset($_POST[$str])){
    if($k==0){
      $collection->insertOne(['_id' => 'OTHER']);
    }$k=1;
    $collection -> updateOne(['_id' => 'OTHER'], ['$set' => [$str => encrypt($_POST[$str])]]);
  }
}


header('Location:page7.php');
?>
