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
<title>REGISTER</title>
</head>
  <body>
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-color:lavender ;" ></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Register</h3>
            <div id="message"></div>
            <form method="POST"  id="myform" >
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" placeholder="Your Firstname" id="fname" name="fname">
                    <span class="error" id="username_err"> </span>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" placeholder="Your Lastname" id="lname" name="lname">
                    <span class="error" id="lastname_err"> </span>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" placeholder="Your E-mail Address" id="email" name="email">
                    <span class="error" id="email_err"> </span>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="gender">Gender</label>
                    <div class="radio">
                           <div class="form-radio-item">
                                <input type="radio" name="gender" value="male">
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value="others">
                                <label for="others">Others</label>
                                <span class="check"></span>
                            </div>
                          </div>
                          <span class="error" id="radio_err"> </span>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Phone Number</label>
                    <input type="tel" maxlength="10" class="form-control" placeholder="+00 0000 000 0000" id="contact" name="contact">
                    <span class="error" id="mobile_err"> </span>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Date of Birth</label>
                    <input type="date" class="form-control"  id="dob" name="dob">
                    <span class="error" id="dob_err"> </span>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group last mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Your Password" id="password_1" name="password_1">
                    <span class="error" id="password_err"> </span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group last mb-3">
                    <label for="re-password">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Your Password" id="password_2" name="password_2">
                    <span class="error" id="cpassword_err"> </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group last mb-3">
                    <label for="image">Choose your Profile Pic</label>
                    <input type="file" class="form-control" placeholder="Your Password" id="image" name="image">
                    <span class="error" id="file_err"> </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group last mb-3">Already have an account?<a class="link" href="login.php"> Sign In</a></div>
                </div>
              </div>
              <button type="button" id="submitbtn" class="btn btn-block btn-primary  ">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/validation.js"></script>
</body>
</html>