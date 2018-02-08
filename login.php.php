<?php
$uname=$_POST['uname'];//username
$password=$_POST['password'];//password


$con=mysqli_connect("localhost","root","","login");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `login_info` WHERE `uname`='$uname' && `password`='$password'');
$count=mysqli_num_rows($result);
echo $count;


?>