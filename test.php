<?php
$pass=$_POST["pass"];
$user=$_POST["user"];
$cn=mysqli_connect("localhost","root","","user");
mysqli_query($cn , "INSERT INTO `user` (`user`, `pass`) VALUES ('$pass', '$user')");
mysqli_close($cn)
?>
<p><h1>wellcome</h1></p>