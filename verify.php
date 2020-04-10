<?php
session_start();
error_reporting(0);
include 'security.php';
include 'connect.php';
$temp = $_GET['id'];
$_SESSION['temp'] = $temp;
if(isset($_POST['gotp']))
{
	if(isset($_POST['id']))
	{
	  $id = $_POST['id'];
	  $mob = $_POST['mob'];
	  $collection = $db->patient_details;
	  $res = $collection->find(['_id' => $id]);
	foreach($res as $details)
	{
		$name = decrypt($details['name']);
		$age = decrypt($details['age']);
		$sex = decrypt($details['sex']);
		$mob1	= decrypt($details['phone']);
	}

	if(strcmp($mob1, $mob)==0)
	{								//to send otp to this number
	  $_SESSION['p_id'] = $id;
	  $_SESSION['p_name'] = $name;
		$_SESSION['p_age'] = $age;
		$_SESSION['p_sex'] = $sex;
	  $_SESSION['otp'] = 123456;
	  echo "<script> alert('Otp sent to registered mobile number');
		location = 'verify.php?id=$temp';
			</script>";
	}
	else
	{
		echo "<script> alert('Wrong details');
		location = 'verify.php';
			</script>";
	}
}
}
if(isset($_POST['verify']))
{
	if($_SESSION['otp'] == $_POST['otp'])
	{
		if($_SESSION['temp']==0)
		{
			date_default_timezone_set('Asia/Kolkata');
			$d = date("y-m-d");
			$t = date("h:i:sa");
			$var = "info_".$_SESSION['p_id'];
			$collection1 = $info->$var;
			$cursor = $collection1->find();
			$m =  count(iterator_to_array($cursor)) + 1;
			$res = $collection1->findOne(['_id'=>1]);
			$n = $res['casesheet_count'] + 1;
			$_SESSION['caseid'] = "c".$n."_".$_SESSION['p_id'];
			$collection1->updateOne(['_id'=>1],['$set'=> ['casesheet_count'=>$n ]]);
			$collection1->insertOne(['_id'=>$m,'doc_id'=>$_SESSION['docid'],'addCasesheet'=>$_SESSION['caseid'],'date'=>$d,'time'=>$t]);
			$collection1 = $db->patient_casesheets;
			$collection1->insertOne(['p_id'=>$_SESSION['p_id'],'doc_id'=>$_SESSION['docid'],'casesheet'=>$_SESSION['caseid'],'hospital_id'=>$_SESSION['hospital_id'],'date'=>$d,'time'=>$t]);
			echo "<script>
			location = 'general.php';
        </script>";
		}
		else if($_SESSION['temp']==1)
		{
			echo "<script>
			location = 'ViewCasesheets-home.php';
				</script>";
		}

	}
	else
	{
		echo "<script> alert('Invalid OTP');
		location = 'verify.php';
        </script>";
	}
}
?>

<html>
<head><title>Casesheet</title>
<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
<div class="login-page">
  <div class="form">
    <form  method="post">
      <input type="text" name="id" placeholder="Enter Patient's ID">
	  <input type="text" name="mob" placeholder="Phone">
      <input type = "submit" name = "gotp" id = "got" value = "Get OTP"/>
	  <input type="text" name="otp" placeholder="Enter OTP"/>
      <input type = "submit" id = "button" name = "verify" value = "verify">
	  <p class="message"><a style = "color: #666;"href="home.php">BACK</a></p>
    </form>
  </div>
</div>
<script type="text/javascript">
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</body>
</html>
