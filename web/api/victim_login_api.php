<?php 

	define('HOST','localhost');

	define('USER','id7866987_disaster');

	define('PASS','qwerty123');

	define('DB','id7866987_db_disaster');


	 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');



	
	if($_SERVER['REQUEST_METHOD']=='POST'){

	$Username = $_POST['username'];
		
	$Password = $_POST['password'];


	$sql = "SELECT * FROM victim WHERE username='$Username' AND password='$Password'";

	
	$result = mysqli_query($con,$sql);

	$check = mysqli_fetch_assoc($result);
   
	if(isset($check))
	{
    $check["error"]=0;
    
	echo json_encode($check);
   
	}
	else{

	 $check["error"]=1;
    
	echo json_encode($check);

	}

		mysqli_close($con);

	}