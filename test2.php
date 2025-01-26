<?php
$name=$_POST["name"];
$pass=$_POST["pass"];
$user=$_POST["user"];
$cn=mysqli_connect("localhost","root","","user");
mysqli_query($cn , "INSERT INTO `user` (`user`, `pass`, `name`) VALUES ('$name', '$pass', '$user')");
mysqli_close($cn)
?>