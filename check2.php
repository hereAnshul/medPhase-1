<?php
session_start();
error_reporting(0);
include 'connect.php';
$age = $_POST['age'];
$sex = $_POST['sex'];
$religion = $_POST['religion'];
$state = strtoupper($_POST['states']);
$marital = $_POST['marital'];
$veg = $_POST['food'];
$city = $_POST['city'];
$occ = $_POST['occupation'];
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;
date_default_timezone_set('Asia/Kolkata');
						$d = date("y-m-d");
						$t = date("h:i:sa");
$collection->insertOne(['_id'=>'IMPORTANTS','docname'=>$_POST['docname'],'docid'=>$_SESSION['docid'],'date'=>$d,'time'=>$t]);
$collection->insertOne(['_id'=>'GENERAL INFORMATION','AGE'=>$age,'SEX'=>$sex,'RELIGION'=>$religion,'STATE'=>$state,'CITY'=>$city,'OCCUPATION'=>$occ,'MARITAL STATUS'=>$marital,'NON VEG'=>$veg]);   //still the surgeon name and the patient and its occupation is to be included
$collection->insertOne(['_id'=>'COMPLAINTS']);
$collection->insertOne(['_id'=>'VITALS']);
for($i=0;$i<5;$i++)
{

	if(isset($_POST['vitals'][$i]))
	{
		if(isset($_POST['v'][$i]))
			{
				$a = $_POST['v'][$i];
				$b = $_POST['vitals'][$i];
				$collection->updateOne(['_id' => 'VITALS'],['$set' => [$b => $a]]);
			}
	}
}
if(isset($_POST['a'][0]))
		{
			$a = $_POST['a'][0];
			$collection->updateOne(['_id' => 'VITALS'],['$set' => ['icterus' =>$a]]);
		}
	if(isset($_POST['a'][1]))
	{
		$a = $_POST['a'][1];
		$collection->updateOne(['_id' => 'VITALS'],['$set' => ['pallor' => $a]]);
	}
	if(isset($_POST['a'][2]))
	{
		$a = $_POST['a'][2];
		$collection->updateOne(['_id' => 'VITALS'],['$set' => ['finger clubbing' => $a]]);
	}
$collection->updateOne(['_id' => 'VITALS'],['$set' => ['height' => $_POST['height'],'weight'=>$_POST['weight']]]);

$k = 0;
for($i=0;$i<4;$i++)
{
if(isset($_POST['mouth'][$i]))
{
	if($k==0)
	{
		$collection->insertOne(['_id'=>'MOUTH']);
		$k = 1;
	}
	for($j=0;$j<4;$j++)
	{
		$str  = "b".$i;

			$collection->updateOne(['_id' => 'MOUTH'],['$set' => [ $_POST['mouth'][$i] => [ 'a0' => $_POST[$str][0],'a1' => $_POST[$str][1],
			'a2' => $_POST[$str][2],'a3' => $_POST[$str][3],'a4' => $_POST[$str][4]] ]]);

	}
}
}
header('Location:pain.php');

for($i=0;$i<4;$i++)
{
	$str = "c".$i;
	if(isset($_POST[$str]))
	{
		$str1 = "t".$i;
		$collection->updateOne(['_id' => 'COMPLAINTS'],['$set' => [strtoupper($_POST[$str]) => strtoupper($_POST[$str1])]]);
	}
}


?>
