<?php
session_start();
error_reporting(0);
include 'connect.php';
$casesheet = $_SESSION['caseid'];
$var = "eye_".$_SESSION['hospital_id'];
$eye = $client->$var;
$collection = $eye->$casesheet;

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