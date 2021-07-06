<?php   //send.php yi oluşturduk çünkü:mesajları depolamamız için

session_start();
include'dbh.php';
$msg=$_POST['chat-message'];
$name=$_SESSION['name'];

echo $_SESSION['name'];


$sql="insert into posts(msg,name) values('$msg','$name')";
$result=$conn->query($sql);


header("Location:../index2.php");

?>