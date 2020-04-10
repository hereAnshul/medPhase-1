<?php
session_start();
include 'connect.php';
if(isset($_POST['gotp']))
{
    ###################################api here######################################
	  $_SESSION['otp'] = 123456;
	  echo "<script> alert('Otp sent to registered mobile number');
		location = 'setpass.php';
			</script>";
}
if(isset($_POST['set']))
{
	if($_SESSION['otp'] == $_POST['otp'])
	{
        if($_POST['pass'] == $_POST['rpass']){
            $code = $_POST['pass'];
            $ciphering = "AES-128-CTR";
            $iv_length = openssl_cipher_iv_length($ciphering);
            $options = 0;
            $encryption_iv = '1234567891011121';
            $encrypt = openssl_encrypt($code, $ciphering,
                        $_SESSION['id'], $options, $encryption_iv);
              $collection = $db->patient_details;
              $collection->updateOne(['_id' => $_SESSION['id']], ['$set'=>['password'=> $encrypt]]);
        		echo "<script>
        		location = 'welcome.php';
                </script>";
    	}
      else{
        echo "<script> alert('Enter Again(Better put JS check)');
    		location = 'setpass.php';
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
<head><title>New User (Set Password)</title>
<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
<div class="login-page">
  <div class="form">
    <form  method="post" target="_self">
      <p>If your number is +91XXXXXX<?php echo substr($_SESSION['phone'], -4);?></p>
        <input type = "submit" name = "gotp" id = "got" value = "Get OTP"/>
	      <input type="text" name="otp" placeholder="Enter OTP"/>
        <input type="password" name="pass" placeholder="Enter Password"/>
        <input type="password" name="rpass" placeholder="Re-Enter Password"/>
        <input type = "submit" id = "button" name = "set" value = "Set Password">
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
