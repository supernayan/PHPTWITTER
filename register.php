<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signup {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signup .form-signup-heading,
      .form-signup .checkbox {
        margin-bottom: 10px;
      }
      .form-signup input[type="text"],
      .form-signup input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
  </head>
  <body>
      <div class="container">
        <form class="form-signup" action="auth" method="post">
          <h2 class="form-signup-heading">Please sign up</h2>
          <input name="email" type="text" class="input-block-level" placeholder="Email address">
          <input name="password" type="password" class="input-block-level" placeholder="Password">
          <input type="hidden" name="auth_type" value="signup">
          <button class="btn btn-large btn-primary" type="submit">Sign up</button>
        </form>
      </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>