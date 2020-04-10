<?php
session_start();
error_reporting(0);
require 'connect.php';
include 'security.php';
if(isset($_POST['register']))
{
  $collection = $db->patient_details;
  $name = encrypt($_POST['name']);
  $age = encrypt($_POST['age']);
  $gender = encrypt($_POST['sex']);
  $phone = encrypt($_POST['phone']);
  $mail = encrypt($_POST['mail']);
  $cursor = $collection->find();
  $n =  count(iterator_to_array($cursor));
  $id = 1001001 + $n + 1;
  $collection->insertOne(['_id'=>(string)$id,'name'=>$name, 'age'=>$age, 'sex'=>$gender, 'phone'=>$phone, 'mail'=>$mail, 'password'=>'']);
  $var = "info_".$id;
  $collection1 = $info->$var;
  $collection1->insertOne([_id=>1,"casesheet_count"=>0]);
  echo "<script> alert('Your Id is $id');
    location = 'home.php';
        </script>";
}
?>
<html>
<head><title>New Patient</title>
<link rel="stylesheet" type="text/css" href="reg.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
</head>
<body>
<div class="login-page">
  <div class="form">
    <form  method="post">
      <input type="text" name="name" placeholder="Enter Name">
      <input type="number" name="age" placeholder="Enter Age">
      <select name = "sex">
        <option value="">---Select Gender---</option>
        <option value="MALE">Male</option>
        <option value="FEMALE">Female</option>
        <option value="OTHERS">Other</option>
      </select>
      <input type="text" name="phone" placeholder="Enter Phone Number"/>
      <input type="email" name="mail" placeholder="Enter Mail(optional)"/>
      <input type = "submit" id = "button" name = "register" value = "register"/>
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
