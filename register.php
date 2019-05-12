<!DOCTYPE html>
<html>
	<head>
		<title>Registration Page</title>
		<script>
			function validasiFormRegistrasi() {
			  var email = document.forms["formregistrasi"]["email"].value;
			  var uname = document.forms["formregistrasi"]["username"].value;
			  var pwd = document.forms["formregistrasi"]["passwd"].value;
			  var konfirmpwd = document.forms["formregistrasi"]["konfirmpasswd"].value;
			  var notlp = document.forms["formregistrasi"]["notlp"]["notlp"].value;

			  if (email == "") {
				alert("Silahkan input email!");
				document.forms["formregistrasi"]["email"].focus();
				return false;
			  }

			  if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
				alert("Email tidak valid!");
				document.forms["formregistrasi"]["email"].focus();
				return false;
			  }

			  if (uname == "") {
				alert("Silahkan input username!");
				document.forms["formregistrasi"]["username"].focus();
				return false;
			  }

			  if (!/^[a-zA-Z_]+([\.-]?\w+)+$/.test(uname)){
				alert("Username tidak valid!");
				document.forms["formregistrasi"]["username"].focus();
				return false;
			  }

			  if(pwd == "") {
				alert("Silahkan input password!");
				document.forms["formregistrasi"]["passwd"].focus();
				return false;
			  }

			  if(pwd.length < 8) {
				alert("Password minimal 8 karakter!");
				document.forms["formregistrasi"]["passwd"].focus();
				return false;
			  }

			  if(!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/.test(pwd)) {
				alert("Password harus berisi kombinasi huruf kapital dan kecil, karakter spesial, dan angka!");
				document.forms["formregistrasi"]["passwd"].focus();
				return false;
			  }

			  if(konfirmpwd == "") {
				alert("Silahkan input konfirmasi password!");
				document.forms["formregistrasi"]["konfirmpasswd"].focus();
				return false;
			  }

			  if(konfirmpwd != pwd) {
				alert("Konfirmasi password tidak sama!");
				document.forms["formregistrasi"]["konfirmpasswd"].focus();
				return false;
			  }
			}
		</script>
	</head>
	<body>
		<div style="width:400px; margin: -30px auto; padding: 10px;">
			<h2>REGISTRATION PAGE</h2>
			<hr/>
			<form name="formregistrasi" action="login.html" onsubmit="return validasiFormRegistrasi()" method="post">
				<fieldset>
					<legend>Akun</legend>
					<div style="margin-bottom: 10px">
						<div style="float: left; margin-right: 20px">
							<label for="email">Email</label><br/>
							<input type="text" name="email">
							</div>
						<div>
							<label for="username">Username</label><br/>
							<input type="text" name="username">
						</div>
					</div>
					<div>
						<div style="float: left; margin-right: 20px">
							<label for="passwd">Password</label><br/>
							<input type="text" name="passwd"><br/><br/>
						</div>
						<div>
							<label for="passwd">Konfirmasi Password</label><br/>
							<input type="password" name="konfirmpasswd"><br/><br/>
						</div>
					</div>
				</fieldset>
				<br/>
				<input type="submit" value="Register" style="width:70px">
				<input type="reset" value="reset" style="width:70px">
			</form>
		</div>
	</body>
</html>
