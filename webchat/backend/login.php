<?php
session_start();  //kullanıcı bilgilerini depolamak için
include'dbh.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$cookie_name = "username";
$cookie_value = $uname;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

$sql="SELECT uid FROM signup WHERE username='$uname'";
$result=$conn->query($sql);
$row = mysqli_fetch_array($result);

$cookie_name = "id";
$cookie_value = $row['uid'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

$sql="SELECT * FROM signup WHERE username='$uname' AND password='$pass'";
$result=$conn->query($sql);

if (!$row=$result->fetch_assoc()) {
	echo'
        <script type="text/javascript">
			alert("Username or Password is wrong! Please try again later.");
			window.location.href = "../index.php";
		</script>
        ';
}

else{

	$_SESSION['name']=$_POST['uname'];

	header("Location:./send.php");
}

?>
