<?php
session_start();
if($_SESSION["docid"]==""){
  echo "<script> alert('Bad Bad Boy');
      location = '404.php';
          </script>";
}
error_reporting(0);
require 'connect.php';
$collection = $db->patient_casesheets;
$res = $collection->find(['p_id' =>$_SESSION['p_id']]);
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
     <a class="p-2 text-dark" href="#"><?php echo 'Dr. '.$_SESSION['docname'];?></a>
	 <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="mailto:teamcreators7@gmail.com">Contact Support</a>
		<a class="btn btn-outline-primary" href="home.php">Home</a>
	</nav>
    </div>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Doctor Id</th>
          <th scope="col">Hospital Id</th>
          <th scope="col">Date</th>
          <th scope="col">Time</th>
          <th scope="col">Casesheet Id</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($res as $details) {?>
        <tr>

          <td><?php echo $details['doc_id'] ?></td>
          <td><?php echo $details['hospital_id'] ?></td>
          <td><?php echo $details['date'] ?></td>
          <td><?php echo $details['time'] ?></td>
          <td><a href="casesheet.php?caseid=<?php echo $details['casesheet']?>"><?php echo $details['casesheet'] ?></a></td>

        </tr>
      <?php }  ?>
      </tbody>
    </table>
  </body>
</html>
