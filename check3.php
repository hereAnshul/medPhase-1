<?php
session_start();
error_reporting(0);
include 'connect.php';
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;
if(isset($_POST['next2']))
{
	$k = 0;
	for($i=0;$i<2;$i++)
	{
		if(isset($_POST['eyeache'][$i]))
		{
			if($k==0)
			{
				$collection->insertOne(['_id' => 'SITE OF PAIN']);
				$k = 1;
			}
			$str = "a".$i;
			$collection->updateOne(['_id'=>'SITE OF PAIN'],['$set' => [$_POST['eyeache'][$i] => $_POST[$str]]]);
		}
	}
	$r = 0;
	$m = 0;
	for($i=0;$i<8;$i++)
	{
		$str = "d".$i;
		if(isset($_POST[$str]))
		{
			if($r == 0)
			{
				$collection->insertOne(['_id' => 'ASSOCIATED SYMPTOMS']);
				$r = 1;
			}
			$abc = "a".$m;
			$collection->updateOne(['_id'=>'ASSOCIATED SYMPTOMS'],['$set' => [ $abc => $_POST[$str]]]);
			$m+=1;
		}
	}

	if(isset($_POST['onset']))
	{
		$collection->updateOne(['_id'=>'SITE OF PAIN'],['$set' => ['onset' => $_POST['onset']]]);
	}

	if(isset($_POST['b']))
	{
		$collection->updateOne(['_id'=>'SITE OF PAIN'],['$set' => ['character' => $_POST['b']]]);
	}

	if(isset($_POST['c0'])||isset($_POST['c1'])||isset($_POST['c2']))
	{
		$collection->updateOne(['_id'=>'SITE OF PAIN'],['$set' => ['radiation' => ['a0'=>$_POST['c0'],'a1'=>$_POST['c1'],'a2'=>$_POST['c2']]]]);
	}

	if(isset($_POST['continuous']))
	{
		$collection->insertOne(['_id' => 'TIMING',$_POST['continuous']=>'True']);
	}
	else
	{
		$collection->insertOne(['_id' => 'TIMING','episodic' => $_POST['episodic']]);
	}
	if(isset($_POST['frequency']))
	{
		$collection->updateOne(['_id'=>'TIMING'],['$set' => ['frequency' => $_POST['frequency']]]);
	}
	if(isset($_POST['duration']))
	{
		$collection->updateOne(['_id'=>'TIMING'],['$set' => ['duration' => $_POST['duration']]]);
	}
}

header('Location:visdis.php');

?>
