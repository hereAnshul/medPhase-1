<?php

//session and connection
session_start();
error_reporting(0);
include 'connect.php';
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;

//value push
if($_POST['HEADPOS']!=""){
  	$collection->insertOne(['_id' => 'HEADPOS', 'headposition' => $_POST['HEADPOS']] );
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
    $collection->updateOne(['_id' => 'EYESHAPE'], ['$set' => ['EXOPTHALMOS' => ['A/E' => $_POST['ae'], 'R/NR' => $_POST['rnr']]]]);
  }
  if(isset($_POST['enophthalmos'])){
    $collection->updateOne(['_id' => 'EYESHAPE'], ['$set' => ['ENOPHTHALMOS' => 'True']]);
  }
  if(isset($_POST['buphthalmos'])){
    $collection->updateOne(['_id' => 'EYESHAPE'], ['$set' => ['BUPHTHALMOS' => 'True']]);
  }
  if(isset($_POST['microphthalmos'])){
    $collection->updateOne(['_id' => 'EYESHAPE'], ['$set' => ['MICROPHTHALMOS' => 'True']]);
  }
  if(isset($_POST['pthisisbulbi'])){
    $collection->updateOne(['_id' => 'EYESHAPE'], ['$set' => ['PTHISISBULBI' => 'True']]);
  }
}

//missing for movement ....
$phoria = "null";
$tropia = 'null';
if($_POST['phoria']!="" OR $_POST['tropia']!=""){
  $phoria = $_POST['phoria'];
  $tropia = $_POST['tropia'];
  $collection->insertOne(['_id' => 'MISALIGNMENT', 'PHORIA' => $phoria, 'TROPIA' => $tropia]);
}

header('Location:page10.php');

?>
