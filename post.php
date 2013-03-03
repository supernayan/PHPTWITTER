<?php
	$con=mysqli_connect("localhost:3306","root","banana","twitter");

	if (mysqli_connect_errno($con)){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}else{
		if(isset($_COOKIE['userId']) && isset($_POST['status']) ){		
			mysqli_query($con,"INSERT INTO user_post (user_id, body) VALUES($_COOKIE[userId], '$_POST[status]')");
			header('Location: /twitter/feed');	
		}else{
			echo "Not authorized or status not provided.";
		}
	}

	mysqli_close($con);
?>