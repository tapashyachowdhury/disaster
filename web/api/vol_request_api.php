<?php


        define('HOST','localhost');

        define('USER','id6263730_empsim');

       	define('PASS','simplified');

	define('DB','id6263730_employeesim');


        $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	
        
	if($_SERVER['REQUEST_METHOD']=='POST'){


	    $Location= "SELECT address FROM volunteer WHERE username='$username'";
	    $sql = "SELECT * FROM request_help WHERE location='$Location'";

	    
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
