<?php
  session_start();
  if (!isset($_SESSION['userid'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/profile.css">
<div class="container emp-profile">
            <form method="post">
                <?php
                $db = mysqli_connect("localhost", "root", "", "guvi_database");
                $id=$_SESSION['userid'];
                $sql=mysqli_query($db,"select * from signup where id='$id'");
                $check=mysqli_num_rows($sql)>0;
                if($check){
                    while($row=mysqli_fetch_assoc($sql)){
                        ?>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="./Images/<?php echo $row["image"]; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $row["fname"]; ?>
                                    </h5>
                                    <h6>
                                        See your profile information
                                    </h6>
                                    <p class="proile-rating"></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="profile-edit-btn" name="btnAddMore"><a href="includes/logout.php">LOGOUT</a></button>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row" >
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row["id"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row["fname"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row["lname"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row["email"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row["gender"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row["contact"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date Of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row["dob"]; ?></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } }?>
            </form>           
        </div>