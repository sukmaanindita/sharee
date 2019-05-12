<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['passwd']);
 
$sql = "SELECT * FROM pengguna WHERE username='".$username."' AND password = '".$password."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	session_start();
	$row = $result->fetch_assoc();
	$_SESSION['id'] = $row["id"];
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $row["nama"];
	$_SESSION['status'] = "login";
	header("location:home.php");
} else {
    header("location:login.php");	
}
$conn->close();
?>