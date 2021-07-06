  
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Chat Application</title>
		<link rel="stylesheet" href="../css/master.css">
	</head>
	<body>
    <div><?php if(isset($err_message)) { echo $err_message; } ?></div>
		<form class="box" action="delete.php" method="post">
        <h1>Are You Sure You Want To Delete ?</h1>
            
			<button class="btn btn-info btn-md" name="submit" type="submit"><b>Delete Account</b></button>
		</form>
	</body>
</html>