<?php

session_start();

include 'koneksidb.php';

// Cek Cookie
if (isset($_COOKIE['id_user']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id_user'];
	$key = $_COOKIE['key'];

	// Ambil Username Berdasarkan ID
	$result = mysqli_query($koneksi,"SELECT username FROM login WHERE id_user = $id");
	$row = mysqli_fetch_assoc($result);
	
	// Cek Cookie dan Username
	if ( $key === hash('sha256', $row['username'])) {
		$_SESSION["login"] = true;
	}
}


if (isset($_SESSION["login"])) {
	$query = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '".$_SESSION["username"]."' AND password = '".$_SESSION["password"]."' "); 

	$data = mysqli_fetch_array($query);
	$user_role = $data['user_role'];

	if (mysqli_num_rows($query)>0) 
        {
            $_SESSION['user_role'] = $user_role;

            if ($user_role == 'admin') 
            {
                header('location: admin.php');
            }
            elseif ($user_role == 'staff') 
            {
                header('location: staff.php');
            }
            elseif ($user_role == 'keuangan') 
            {
                header('location: keuangan.php');
            }
        } 
        else 
        {
            $error = true;
        }
}


if(isset($_POST["login"]) ) {

 $username = $_POST["username"];
 $password = $_POST["password"];

 $_SESSION['username'] = $username;
 $_SESSION['password'] = $password;
 $_SESSION["last_login_time"] = time();

$result = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '".$password."'");
 // cek username  
 if(mysqli_num_rows($result) == 1 ) {

  // cek password
  $row = mysqli_fetch_assoc($result);

  if( $password == $row["password"])  {
   // Set Session
	$_SESSION['id_user'] = $row['id_user'];  
  	$_SESSION["login"] = true;

  	// Cek Remember Me
  	if (isset($_POST['remember'])) {
  		// Buat Cookie
  		setcookie('id_user',$row['id_user'],time()+60);
  		setcookie('key',hash('sha256', $row['username']),time()+60);	
  	}			
   header("location: index.php");
   exit;
	}
 }else{
 	echo "<script>alert('Maaf Username / Password Salah!');history.go(-1);</script>";
    exit;	
 }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login/images/icon.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login/css/main.css">
<!--===============================================================================================-->
<style>
	#mybutton{
		cursor: pointer;
		margin-left: 5px;
	}
</style>
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<marquee direction='left' behavior='alternate'><b>Selamat Datang Di Aplikasi Surat Perintah Perjalanan Dinas 2019  v.1.0</b></marquee>
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="Login/images/Dispora.jpg" alt="IMG">
					<h5 style="text-align: center;">DISPORA PROVINSI JATIM</h5>
					<h5 style="text-align: center;">2019</h5>
				</div>
				
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Login SPPD
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username Harus Diisi">
						<input class="input100" type="text" name="username" placeholder="Username" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password Anda Salah">
						<input class="input100" type="password" name="password" placeholder="Password" id="password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password Harus Diisi">
						<input type="checkbox" name="remember" id="remember">
						<span>Ingatkan Saya</span>
						<span onclick="change()" id="mybutton"><i class="fa fa-eye"></i> Lihat Password</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login" id="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Aplikasi Surat Perintah Perjalanan Dinas Versi 1.0
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/bootstrap/js/popper.js"></script>
	<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="Login/js/main.js"></script>
<!-- ============================================================================================= -->
  <script type="text/javascript">
         function change()
         {
            var x = document.getElementById('password').type;
 
            if (x == 'password')
            {
               document.getElementById('password').type = 'text';
               document.getElementById('mybutton').innerHTML = '<i class="fa fa-eye-slash"></i> Lihat Password';
            }
            else
            {
               document.getElementById('password').type = 'password';
               document.getElementById('mybutton').innerHTML = '<i class="fa fa-eye"></i> Lihat Password';
            }
         }
      </script>

</body>
</html>