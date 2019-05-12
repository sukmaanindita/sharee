<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<script>
			function validasiFormLogin() {
			  var uname = document.forms["formlogin"]["username"].value;
			  var pwd = document.forms["formlogin"]["passwd"].value;
			  
			  if (uname == "") {
				alert("Silahkan isi username!");
				document.forms["formlogin"]["username"].focus();
				return false;
			  } 
			  
			  if(pwd == "") {
				alert("Silahkan isi password!");
				document.forms["formlogin"]["passwd"].focus();
				return false;
			  }
			}
		</script>
	</head>
	<body>
		<div style="width:350px; margin: 150px auto; padding: 10px; 
					border: 1px solid black;">
			<h2>LOGIN PAGE</h2>
			<form name="formlogin" action="aksilogin.php" onsubmit="return validasiFormLogin()" method="post">
				<div style="overflow: auto">
					<img src="secure.jpg" alt="Secure" width="150" height="150" 
						 style="float: left"/>
					<label for="username">Username</label><br/>
					<input type="text" name="username"><br/><br/>
					<label for="passwd">Password</label><br/>
					<input type="password" name="passwd"><br/><br/>
					<input type="submit" value="Login" style="width:70px">
					<a href="register.php" title="Registrasi">Register</a>
				</div>
			</form>
		</div>
	</body>
</html>