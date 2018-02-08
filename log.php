<?php

	$connect= new mysqli('localhost', 'root','' ,'login');

	if($connect->connect_error){
		die('connection failed bruth');
	
	echo 'connect worked';
	
	$username= $_POST('username');
	$password= $_POST('password');
	
	$sql="SELECT name FROM login WHERE username='$username' AND password='$password'";
	
	$result= $connect->query($aql);
	
	if($result=> num_rows>0){
		
		while($row=$result->fetch_assoo())(
		
			echo "a]Admin name is: " . $row["name"];
			



			
?> 