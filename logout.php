<?php
session_start();
		if(isset($_SESSION['docid']))
		{
			session_destroy();
			header('Location:index.php');
		}
		elseif(isset($_SESSION['id']))
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
