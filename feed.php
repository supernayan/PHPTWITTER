<!DOCTYPE html>
<html>
  <head>
    <title>Feed</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
      <div class="container">
        <h1>Status for user @<?= $_GET["userId"]; ?></h1>
        <form>
          <button name="follow" type="submit" class="btn btn-success">Follow</button>                    
        </form>
        <form action="post" method="post">
          <h2>What's happening?</h2>
          <input name="status" type="text" class="input-xlarge" placeholder="What's happening?"> <br />                    
          <button class="btn btn-primary" type="submit">Post</button>
        </form>
      </div>
      <div class="container">
        <ul>
        <?php 
          $con=mysqli_connect("localhost:3306","root","banana","twitter");

          if (mysqli_connect_errno($con)){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }else{
            if(isset($_COOKIE['userId'])){    
              $result = mysqli_query($con,"SELECT * FROM user_post WHERE user_id = $_GET[userId] ORDER BY id DESC");
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
        </ul>
      </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>