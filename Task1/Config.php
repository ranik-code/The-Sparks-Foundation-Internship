<?php

	$conn = mysqli_connect('localhost','root','','bbank');

	if($conn){
                   // 	Connection successfully established.
	}
        else{
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());  // Connection not established
	}

?>
