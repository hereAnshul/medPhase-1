<?php
session_start();
require 'connect.php';

if(isset($_POST['login']))
{
  if($_POST['pass']==""){
    echo "<script> alert('Dont leave password blank');
      location = 'index.php';
          </script>";
  }
  $pass = $_POST['pass'];
  $id = $_POST['id'];
  $collection = $db->doctor_details;
  $res = $collection->find(['_id' => $id]);
  foreach($res as $details)
  {
    $password = $details['pass'];
    $name =  $details['name'];
    $hospital_id =  $details['hospital'];
  }
  if(strcmp($password,$pass)==0)
    {
      $_SESSION['docid'] = $id;
      $_SESSION['docname'] = $name;
      $_SESSION['hospital_id'] = $hospital_id;
      echo "<script>
        alert('Welcome Doctor');
        location = 'home.php';
            </script>";
    }
    else
      {
        echo "<script> alert('Wrong Credentials ');
          location = 'index.php';
              </script>";
      }
  }
?>

<html>
<head><title>Login</title>
 <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel = "stylesheet">
  <link rel="stylesheet" type="text/css" href="css/pform.css">
<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
<div class="pform">
  <form action="pat.php">
  <input type="button" id="doc" value="Sign-in as Doctor" disabled/>
  <input type="submit" id="pat" value="Sign-in as Patient"/>
  </form>
</div>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post">
      <input type="text" placeholder="Docter's ID" name="id"/>
      <input type="password" placeholder="Password" name="pass"/>
      <input type = "submit" id = "button" name = "login" value = "Login">
      <p class="message">Not registered? <a href="register_doc.php">Create an account</a></p>
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
