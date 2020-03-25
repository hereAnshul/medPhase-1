<?php
session_start();
error_reporting(0);
require 'connect.php';

if(isset($_POST['login']))
{
  $id = $_POST['pid'];
  $collection = $db->patient_details;
  $res = $collection->find(['_id' => $id]);
    foreach($res as $details)
    {
      $password = $details['password'];
      $name =  $details['name'];
      $phone = $details['phone'];
      $gender = $details['sex'];
    }
    if($name=="" && $phone==""){
      echo "<script> alert('Invalid Users');
          location = 'pat.php';
              </script>";
    }
    $_SESSION['phone'] = $phone;
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['gender'] = $gender;
  if($_POST['ppass']=="" && $password==""){
    echo "<script>alert('First Login, Set password');
        location = 'setpass.php';
        </script>";
  }
  else{
    $pass = $_POST['ppass'];
    $ciphering = "AES-128-CTR";
    $options = 0;
    $decryption_iv = '1234567891011121';
    $decrypt=openssl_decrypt ($password, $ciphering,
                $id, $options, $decryption_iv);
  }
  if(strcmp($decrypt, $pass)==0){
  	  echo '<script>location="welcome.php"</script>';
  }else
  {
    echo "<script> alert('Wrong Credentials ');
        location = 'pat.php';
            </script>";
  }
}
?>

<html>
<head><title>Login</title>
 <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel = "stylesheet">
  <link rel="stylesheet" type="text/css" href="css/pform.css">
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
<div class="pform">
  <form action="index.php" method="get">
  <input type="submit" id="doc" value="Sign-in as Doctor"/>
  <input type="button" id="pat" value="Sign-in as Patient" disabled/>
  </form>
</div>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post">
      <input type="text" placeholder="Unique ID" name="pid"/>
      <input type="password" placeholder="Password" name="ppass"/>
      <input type = "submit" id = "button" name = "login" value = "Login">
      <p class="message" title="Contact nearest hospital" style="background-color:#FFFFFF;text-decoration:none">Not registered?
    </form>
  </div>
</div>
</body>
<script type="text/javascript">
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</html>
