<?php
session_start();
		if(isset($_SESSION['doctor_login']))
		{
			session_destroy();
			header('Location:index.php');
		}
		elseif(isset($_SESSION['patient_login']))
		{
			session_destroy();
			header('Location:index.php');
		}
		else {
			echo "<script>alert('Fishy, reported to Administration');
							location = '404.php';
							</script>";
		}

?>
