<?php
	$con=mysqli_connect("localhost:3306","root","banana","twitter");

	if (mysqli_connect_errno($con)){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}else{
		if(isset($_POST['auth_type']) && isset($_POST['email']) && isset($_POST['password'])){
			//TODO: Add SALT + HASHING FUNCTION 
			//TODO: Add validation
			if($_POST['auth_type'] == 'signup'){
				mysqli_query($con,"INSERT INTO user (email, password) VALUES('$_POST[email]', '$_POST[password]')");
				header('Location: /twitter/login');	
			}elseif($_POST['auth_type'] == 'signin'){
				$result = mysqli_query($con,"SELECT id FROM user WHERE email = '$_POST[email]' AND password = '$_POST[password]'");
				$row = mysqli_fetch_array($result);
				setcookie("userId", $row['id']);
				header('Location: /twitter/feed?userId='.$row[id]);	
			}else{
				echo "Invalid authorization type";
			}
		}else{
			echo "Email or password not specified.";
		}
	}

	mysqli_close($con);
?>