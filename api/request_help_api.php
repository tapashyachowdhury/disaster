<?php


        define('HOST','localhost');

        define('USER','id6263730_empsim');

       	define('PASS','simplified');

	define('DB','id6263730_employeesim');


        $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
        
	if($_SERVER['REQUEST_METHOD']=='POST'){


	    $name = "SELECT name FROM victim WHERE username='$username'";
	    $phone_no = "SELECT ph FROM victim WHERE username='$username'";
	    
        $Location = $_POST['location'];
	
	    
	    
	    	    
	   
	    
	    if($Location == '')
		{
	
		echo 'please fill all values';

		}
		else{

	

		$sql = "INSERT INTO request_help (name,ph,location) VALUES('$name','$phone_no','$Location')";

		if(mysqli_query($con,$sql)){

			echo 'successfully submitted the request';
	
	}
		else{
				
			echo 'oops! Please try again!';
		
		}
	  }
}

			
	        mysqli_close($con);

	}