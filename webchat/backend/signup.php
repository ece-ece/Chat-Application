<?php
include'dbh.php';
$uname=$_POST['uname'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$sql2="SELECT * FROM signup WHERE username='$uname' AND email='$email'";
$result2=$conn->query($sql2);

if ($row=$result2->fetch_assoc()) {
	echo'
        <script type="text/javascript">
			alert("Username already exist! Please try again with another Username.");
			window.location.href = "register.php";
		</script>
        ';
    }

else{

	$_SESSION['name']=$_POST['uname'];
	$sql="insert into signup(username,email,password,first_name,last_name)
	values ('$uname','$email','$pass','$fname','$lname')";
	$result=$conn->query($sql);
	header("Location:../index.php");
}




?>

