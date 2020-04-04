<?php

//connection handle
session_start();
error_reporting(0);
include 'connect.php';
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;


//data push

//optic disc
$k = 0;
$m = 0;
for($i=0;$i<=10;$i++)
{
	$str = "opd".$i;

	if(strcmp($_POST[$str],"")!=0)
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'OPTICDISC']);
			$k = 1;
		}
		$str1 = "opd".$m;
		$collection->updateOne(['_id'=>'OPTICDISC'], ['$set' => [$str1 => ($_POST[$str])]]);
	$m+=1;
	}
}

//Physiological cup
if(isset($_POST['CupDiscRatio'])){
	$collection->insertOne(['_id' => 'CDRATIO', 'ratio' => $_POST['CupDiscRatio']]);
}

//retinal vessel
$k = 0;
$m = 0;
for($i=0;$i<8;$i++)
{
	$str = "retv".$i;

	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'RETINALVESSEL']);
			$k = 1;
		}
		$str1 = "retv".$m;
		$collection->updateOne(['_id'=>'RETINALVESSEL'], ['$set' => [$str1 => ($_POST[$str])]]);
	$m+=1;
	}
}

//Macular Region
$k = 0;
$m = 0;
for($i=0;$i<6;$i++)
{
	$str = "mcr".$i;

	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'MACULAR']);
			$k = 1;
		}
		$str1 = "mcr".$m;
		$collection->updateOne(['_id' => 'MACULAR'], ['$set' => [$str1 => ($_POST[$str])]]);
	$m+=1;
	}
}

//Hemorrhage in Retina
$m = 0;
$k = 0;
for($i=0;$i<5;$i++)
{
	$str = "hemr".$i;

	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'RETINALHEMORRHAGE']);
			$k = 1;
		}
		$str1 = "hemr".$m;
		$collection->updateOne(['_id'=>'RETINALHEMORRHAGE'], ['$set' => [$str1 => ($_POST[$str])]]);
		$m+=1;
	}
}




if(isset($_POST['t0']))
{
	$collection->insertOne(['_id'=>'DISEASE','a0'=>strtoupper($_POST['t0'])]);
}
if(isset($_POST['t1']))
{
	$collection->insertOne(['_id'=>'COMMENTS','message'=> $_POST['t1']]);
}


$k = 0;
$m=0;
for($i=0;$i<8;$i++)
{
	$str = "c".$i;

	if(strcmp($_POST[$str],"")!=0)
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'MEDICINES']);
			$k = 1;
		}
	$str1 = "a".$m;
		$collection->updateOne(['_id'=>'MEDICINES'],['$set' => [$str1 => strtoupper($_POST[$str])]]);
	$m+=1;
	}
}

echo "<script> alert('Case Recorded Successfully ');
          location = 'home.php';
              </script>";

?>
