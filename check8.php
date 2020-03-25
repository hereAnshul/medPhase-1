<?php
session_start();
include 'connect.php';
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;


if(isset($_POST['onset']))
{
	$collection->insertOne(['_id' => 'VISUAL DISTURBANCE']);
	$collection->updateOne(['_id'=>'VISUAL DISTURBANCE'],['$set' => ["onset" => $_POST['onset']]]);
}
if(isset($_POST['site']))
{
	$collection->updateOne(['_id'=>'VISUAL DISTURBANCE'],['$set' => ["site" => $_POST['site']]]);
}
$k=0;

for($i=0;$i<=8;$i++)
{
	$str = "c".$i;
	if(isset($_POST[$str]))
	{
		if($k==0)
		{
			$collection->insertOne(['_id' => 'CHARACTER']);
			$k=1;
		}
		$collection->updateOne(['_id'=>'CHARACTER'],['$set' => [$_POST[$str] => "True"]]);
	}
}

$m=0;
$r = 0;
for($i=0;$i<9;$i++)
	{
		$str = "a".$i;
		if(isset($_POST[$str]))
		{
			if($r == 0)
			{
				$collection->insertOne(['_id' => 'ASSOCIATED SYMPTOMS']);
				$r = 1;
			}
			$abc = "a".$m;
			$collection->updateOne(['_id'=>'ASSOCIATED SYMPTOMS'],['$set' => [ $abc => strtoupper($_POST[$str])]]);
			$m+=1;
		}
	}

if(isset($_POST['d0'])){
	$collection->insertOne(['_id' => 'PROGRESSION',$_POST['d0']=>'True']);
}
echo '<script>location="page4.php";</script>';
?>
