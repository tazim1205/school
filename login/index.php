<?php 
include("../database/connection.php");
$db =new database();
session_name("admin");
session_start();
if(isset($_SESSION['email']))
{
	echo "<script>location = '../backend/'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Admin Login
					</span>
				</div>
				<?php 
				
				$email = isset($_POST['email'])?$_POST['email']:'';
				$password = isset($_POST['password'])?$_POST['password']:'';

				if(isset($_POST["login"]))
				{
					$email = mysqli_real_escape_string($db->link,$email);
					$password = mysqli_real_escape_string($db->link,md5($password));

					$sql = $db->link->query("SELECT * FROM `create_admin` WHERE `mail`='$email' AND `password`='$password'");

					if(mysqli_num_rows($sql) > 0)
					{
						$fetch = $sql->fetch_assoc();

						$_SESSION['admin_id'] = $fetch['id'];
						$_SESSION['username'] = $fetch['username'];
						$_SESSION['email'] = $fetch['mail'];
						$_SESSION['image'] = $fetch['image'];
						$_SESSION['type'] = $fetch['type'];
						$_SESSION['admin_type'] = $fetch['admin_type'];
						$_SESSION['message'];

						if($_SESSION['type'] == 1)
						{
							echo "<script>location = '../backend/'</script>";
						}
						else
						{
							echo "<div class='alert alert-danger'>You Are Not Active User</div>";
						}
					}
					else
					{
						echo "<div class='alert alert-danger'>These Credential Does Not Match to Our Record</div>";
					}
				}
				?>
				<form class="login100-form validate-form" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>