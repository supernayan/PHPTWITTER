<!DOCTYPE html>
<html>
  <head>
    <title>Feed</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
      <div class="container">
        <h1>FEED for user <?= $_COOKIE["userId"]; ?></h1>
        <form class="form-signup" action="post" method="post">
          <h2 class="form-signup-heading">What's happening?</h2>
          <input name="status" type="text" class="input-xlarge" placeholder="What's happening?"> <br />                    
          <button class="btn btn-primary" type="submit">Post</button>
        </form>
      </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>