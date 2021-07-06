  
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Chat Application</title>
		<link rel="stylesheet" href="../css/master.css">
	</head>
	<body>
    <div><?php if(isset($err_message)) { echo $err_message; } ?></div>
		<form class="box" action="change.php" method="post">
        <h1>Welcome <?php echo $_COOKIE["username"] ?></h1>
            <input type="password" name="currentPassword" placeholder="Current password">
            <input type="password" name="newPassword" placeholder="New password">
            <input type="password" name="confirmPassword" placeholder="Repeat your password">
			<button class="btn btn-info btn-md" name="submit" type="submit"><b>Change Password</b></button>
		</form>
	</body>
</html>