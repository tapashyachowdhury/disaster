<?php


        define('HOST','localhost');

        define('USER','id6263730_empsim');

       	define('PASS','simplified');

	define('DB','id6263730_employeesim');


        $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
        
        
	if($_SERVER['REQUEST_METHOD']=='POST'){


	    $Username = $_POST['username'];
	    
            $Password = $_POST['password'];
	
	    $Name = $_POST['name'];
	    $Phone_no = $_POST['ph'];
	    $Address = $_POST['address'];
	    $Location=$_POST['location'];
	    if($Username == '' || $Password == '' || $Name == ''|| $Phone_no == '' || $Address == ''|| $Location == '' )
		{
	
		echo 'please fill all values';

		}
		else{

		$sql = "SELECT * FROM victim WHERE username='$Username'";

	        $check = mysqli_fetch_array(mysqli_query($con,$sql));

		if(isset($check)){

		echo 'Email Id already exists';

		}else{

	

		$sql = "INSERT INTO victim ( username, password,name,ph,address,location,is_active) VALUES('$Username','$Password','$Name','$Phone_no','$Address','$Location','1')";

		if(mysqli_query($con,$sql)){

			echo 'successfully registered';
	
	}
		else{
				
			echo 'oops! Please try again!';
		
		}
	  }
}

			
	        mysqli_close($con);

	}