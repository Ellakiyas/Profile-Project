<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login</title>
  </head>
  <body>
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-color:lavender ;" ></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div><h3>Login Here</h3></div>
            <p class="mb-4">Login to see your profile</p>
            <div id="message"></div>
            <form Method="POST" id="myform">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="username">
                <span class="error" id="username_err"> </span>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password" name="password">
                <span class="error" id="pass_err"> </span>
              </div>
              <div style="margin-bottom:20px">
              Don't have an account?<a href="index.php"> Create an acount</a>
              </div>
              <button type="button" id="submitbtn" class="btn btn-block btn-primary  ">LOGIN</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/loginvalidation.js"></script> 
</body>
</html>