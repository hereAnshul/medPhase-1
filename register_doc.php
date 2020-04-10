<?php
session_start();
require 'connect.php';

if(isset($_POST['register']))
{
  $collection = $db->doctor_details;
  $id = $_POST['lin'];
  $name = $_POST['name'];
  if ($_POST['password'] == $_POST['rpass']) {
    // code...
    $pass = $_POST['password'];
  }
  else {
    // code...
    echo "<script> alert('Wrong Credentials ');
      location = 'register_doc.php';
          </script>";
  }
  $hospital_id = $_POST['hospital_id'];
  $cursor = $collection->find();
  $collection->insertOne(['_id'=>(string)$id,'docname'=>$name,'password'=>$pass, 'hospital_id'=>$hospital_id]);
    echo "<script> alert('Welcome Dr. $name, Registeration Complete.');
          location = 'index.php';
        </script>";
}
?>
<html>
<head><title>New Patient</title>
<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
<div class="login-page">
  <div class="form">
    <form  method="post">
      <input type="text" name="lin" placeholder="License Number">
      <input type="text" name="name" placeholder="Enter Name"/>
      <input type="password" name="password" placeholder="Enter Password">
      <input type="password" name="rpass" placeholder="Re-Enter Password">
      <input type="text" name="hospital_id" placeholder="Enter Hospital">
      <input type = "submit" id = "button" name = "register" value = "register">
      <p class="message">Already registered? <a href="index.php">Back</a></p>
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
