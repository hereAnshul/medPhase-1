<?php
session_start();
error_reporting(0);
include 'connect.php';
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;
if(isset($_POST['redeye']))
{
	$collection->insertOne(['_id' => 'REDEYE','duration'=>$_POST['redeyed']]);
}
if(isset($_POST['lacrimation']))
{
	$collection->insertOne(['_id' => 'LACRIMATION','duration'=>$_POST['lacrimationd']]);
}

?>