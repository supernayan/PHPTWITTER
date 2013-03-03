<?php 
  $con=mysqli_connect("localhost:3306","root","banana","twitter");

  if (mysqli_connect_errno($con)){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
    if(isset($_COOKIE['userId']) && isset($_POST['followerUserId'])){    
      $result = mysqli_query($con,"INSERT INTO follower (follower_user_id, user_id) VALUES('$_COOKIE[userId]', '$_POST[followerUserId]')");
      header('Location: /twitter/feed?userId='.$_POST['followerUserId']);
    }else{
      echo "Not authorized or follower id not provided.";
    }
  }

  mysqli_close($con);
?>