<?php
session_start();
error_reporting(0);
require 'connect.php';
?>

<!doctype html>
<head>
  <title>Home</title>
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


    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel = "stylesheet">
<link rel="stylesheet" type="text/css" href="interface.css">

<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  
</head>

<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">MedArch</h5>
     <a class="p-2 text-dark" href="#"><?php echo $_SESSION['docname'];?></a>
	 <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="mailto:teamcreators7@gmail.com">Contact Support</a>
		<a class="btn btn-outline-primary" href="logout.php">Logout</a>
	</nav>
      
	  
    </div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Patient Registeration</h4>
      </div>
      <div class="card-body">
       <h1 class="card-title pricing-card-title">Steps</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Every patient should carry unique identity.</li>
          <li>A mobile phone for otp authentication.</li>
        
        </ul>
        <a href="register_patient.php" class="btn btn-lg btn-block btn-primary">Register</a>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Casesheet Creation</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Steps</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Click on the required checkboxes only.</li>
          <li>At the end give medicines and disease.</li>
         
        </ul>
        <a href="verify.php" class="btn btn-lg btn-block btn-primary">Casesheet</a>
		<!--<button type="button" class="btn btn-lg btn-block btn-primary"  onclick="window.location.href=register_patient.php">Casesheet</button>-->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">View Casesheets</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Steps</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Enter the patient's Id.</li>
		  <li>All the previous casesheets of the patient.</li>
          <li>Most recent will be first.</li>
          </ul>
        <a href="#" class="btn btn-lg btn-block btn-primary">View Casesheets</a>
      </div>
    </div>
  </div>
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
			<p>MedArch</p>
            <small class="d-block mb-3 text-muted">&copy; 2017</small>
          </div>
         <!-- <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
             
            </ul>
          </div> -->
		  <div class="col-6 col-md">
            <p>Designed by Team Creators<p>
            
          </div>
        </div>
      </footer>
	</div>
	</body>
</html>
