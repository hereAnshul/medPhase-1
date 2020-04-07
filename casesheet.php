<?php
session_start();
error_reporting(0);
if($_SESSION["doctor_login"] == 2 && $_SESSION["patient_login"] == 1)
{
  echo "<script> alert('Bad Bad Boy');
      location = '404.php';
          </script>";
}
require 'connect.php';
$caseid = $_GET["caseid"];
$hid = $_GET["hid"];
$_SESSION['temp'] = $hid;
$_SESSION['temp3'] = $caseid;
$prefix = "eye_";
$final_str = $prefix.$hid;
$database_casesheet = $client->$final_str;
$collection = $database_casesheet->$caseid;
$cursor = $collection->find();
$doc_count = $collection->count();
$array = iterator_to_array($cursor);
$m_temp = 0;

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="interface.css">
    <title>Home</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel = "stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">MedArch</h5>
     <a class="p-2 text-dark" href="#">Hello,
       <?php
       if($_SESSION['patient_login']==1)
       {
         if($_SESSION['gender']=='MALE')
         echo "Mr. ".$_SESSION['name'];
         elseif ($_SESSION['gender']=='FEMALE') {
           echo "Mrs. ".$_SESSION['name'];
         }
         else {
           echo $_SESSION['name'];
         }
       }
       elseif($_SESSION['doctor_login']==2)
       {
            echo 'Dr. '.$_SESSION['docname'];
       }
       ?></a>
	 <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="mailto:teamcreators7@gmail.com">Contact Support</a>
		<a class="btn btn-outline-primary" href=<?php

    if($_SESSION['patient_login']==1)
      echo "welcome.php";

    elseif($_SESSION['doctor_login']==2)
      echo "home.php";
    ?>>Home</a>
	</nav>
    </div>

    <script>
    $(document).ready(function(){

    	$('#select').change(function(){
    		$.post("submit.php",
    			{id: $('#select').val()}

    		);
    	});
    });

    $(document).ready(function()
    	{
        $('#select').change(function(){
    		$('#case').load('load.php');
    	});
    });

    </script>

    <select id="select" class="form-control">
      <option value ="100">Choose</option>
      <?php foreach ( $array as $key => $value ){ ?>
        <option value = <?php echo $m_temp++; ?>><?php echo $value['_id']; ?></option>

  <?php } ?>

  </select>

</br>
</br>
</br>
</br>
<div id="case"></div>




  </body>
</html>
