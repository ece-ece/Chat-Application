<?php
session_start();
include'dbh.php';
$id = $_COOKIE["id"];
$sql2="SELECT * FROM signup WHERE uid='$id'";
$result2=$conn->query($sql2);

if ($row=$result2->fetch_assoc()) {
	$sql="DELETE FROM signup WHERE uid='$id'";
	$result=$conn->query($sql);
	header("Location:../index.php");
    }

else{
    echo'
    <script type="text/javascript">
        alert("Failed.");
        window.location.href = "Location:../index2.php";
    </script>
    ';
	
}
?>