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
if($_POST['lidpos']){
  $collection->insertOne(['_id' => 'LIDPOS', 'lidposition' => $_POST['lidpos']] );
}
if($_POST['lidmov']){
  $collection->insertOne(['_id' => 'LIDMOVEMENT', 'lidmovement' => $_POST['lidmov']] );
}
//eye lid
$m = 0;
$k = 0;
for($i=0;$i<7;$i++)
{
	$str = "lmar".$i;

	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'LIDMARGIN']);
			$k = 1;
		}
		$str1 = "lmar".$m;
		$collection->updateOne(['_id'=>'LIDMARGIN'], ['$set' => [$str1 => strtoupper($_POST[$str])]]);
		$m+=1;
	}
}
//Eye lashes
$m = 0;
$k = 0;
for($i=0;$i<6;$i++)
{
	$str = "el".$i;

	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'EYELASHES']);
			$k = 1;
		}
		$str1 = "el".$m;
		$collection->updateOne(['_id'=>'EYELASHES'], ['$set' => [$str1 => strtoupper($_POST[$str])]]);
		$m+=1;
	}
}
//Palpebral aperture
$m = 0;
$k = 0;
for($i=0;$i<5;$i++)
{
	$str = "pa".$i;

	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'PALPEBRAL']);
			$k = 1;
		}
		$str1 = "pa".$m;
		$collection->updateOne(['_id'=>'PALPEBRAL'], ['$set' => [$str1 => strtoupper($_POST[$str])]]);
		$m+=1;
	}
}
//Lacrimal Apparatus----YE VALUE JA NAHI RAHI HAI
if(isset($_POST['la0'])) {
  $collection->insertOne(['_id' => 'LACRIMAL']);
  $collection->updateOne(['_id'=>'LACRIMAL'], ['$set' => ['la0' => strtoupper($_POST['la0'])]]);
}
if(isset($_POST['la1'])) {
  $check = $collection->findone(["_id" => "LACRIMAL"]);
  if(empty($check)){
      $collection->insertOne(['_id' => 'LACRIMAL']);
  }
  $collection->updateOne(['_id'=>'LACRIMAL'], ['$set' => ['la1' => strtoupper($_POST['la1'])]]);
}

// CONJUNCTIVA SECTION
$chk = $collection -> findOne(['_id'=>'CONJUNCTIVA']);
if (empty($chk)) {
    $collection -> insertOne(['_id'=>'CONJUNCTIVA']);
}

if(isset($_POST['chemosis'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['chemosisType' => strtoupper($_POST['chemosisType'])]]);
}

if(isset($_POST['follicles'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['follicles' => strtoupper($_POST['follicleState'])]]);
}

if(isset($_POST['arltsline'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['arltsline' => strtoupper('exist')]]);
}

if(isset($_POST['conjunctivaPos'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['conjunctivaPos' => strtoupper($_POST['cpos'])]]);
}

if(isset($_POST['concretion'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['concretion' => strtoupper($_POST['conc'])]]);
}

if(isset($_POST['papillaryhypertrophy'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['papillaryhypertrophy' => strtoupper($_POST['ph'])]]);
}

if(isset($_POST['pseudocyst'])){
  $collection->updateOne(['_id'=>'CONJUNCTIVA'], ['$set' => ['pseudocyst' => strtoupper($_POST['pc'])]]);
}

if(isset($_POST['xerosis'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['xerosis' => strtoupper('exist')]]);
}

if(isset($_POST['symblepharon'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['symblepharon' => strtoupper('exist')]]);
}

if(isset($_POST['petechialhemorrhage'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['petechialhemorrhage' => strtoupper('exist')]]);
}

if(isset($_POST['phlycten'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['phlycten' => strtoupper($_POST['p'])]]);
}

if(isset($_POST['trantaspot'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['trantaspot' => strtoupper('exist')]]);
}

if(isset($_POST['pinguecula'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['pinguecula' => strtoupper('exist')]]);
}

if(isset($_POST['tumor'])){
  $collection->updateOne(["_id"=>'CONJUNCTIVA'], ['$set' => ['tumor' => strtoupper('exist')]]);
}

if(isset($_POST['pg0'])) {
  $collection->insertOne(['_id' => 'PTERYGIUM']);
  $collection->updateOne(['_id'=>'PTERYGIUMS'], ['$set' => ['pg0' => strtoupper($_POST['pg0'])]]);
}
if(isset($_POST['pg1'])) {
  $check = $collection->findone(["_id" => "PTERYGIUM"]);
  if(empty($check)){
      $collection->insertOne(['_id' => 'PTERYGIUM']);
  }
  $collection->updateOne(['_id'=>'PTERYGIUM'], ['$set' => ['pg1' => strtoupper($_POST['pg1'])]]);
}
header('Location:page11.php');

 ?>
