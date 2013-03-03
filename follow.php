<?php 
  $con=mysqli_connect("localhost:3306","root","banana","twitter");

  if (mysqli_connect_errno($con)){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
    if(isset($_COOKIE['userId'])){    
      $result = mysqli_query($con,"SELECT count(*) FROM follower WHERE user_id = $_GET[userId] ORDER BY id DESC");
      $num_followers = mysql_fetch_assoc($result);
      $num_followers = $num_followers[''];
      if($result){
        while($row = mysqli_fetch_array($result)){
          echo "<li>@".$row['user_id'] . " " . $row['body']."</li>";
        }
      }else{
        echo "This user has not posted anything yet.";
      }
    }else{
      echo "Not authorized or status not provided.";
    }
  }

  mysqli_close($con);
?>