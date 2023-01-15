<?php
session_start();
$username = "";
$db = mysqli_connect("localhost", "root", "", "database");
if (!$db) {
    echo "connection error";
}
$fname = mysqli_real_escape_string($db, $_POST['fname']);
$lname = mysqli_real_escape_string($db, $_POST['lname']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);
$contact = mysqli_real_escape_string($db, $_POST['contact']);
$dob = mysqli_real_escape_string($db, $_POST['dob']);
$pass = mysqli_real_escape_string($db, $_POST['password_1']);
$file=$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],"Images/".$_FILES["image"]["name"]);
$password = md5($pass);

    $sql = "insert into signup(fname,lname,email,gender,contact,dob,password,image) values ('$fname','$lname','$email','$gender','$contact','$dob','$password','$file')";
    $_SESSION['username'] = $fname;
    if ($res = mysqli_query($db, $sql)) {
        echo '<div class="alert alert-success">Successfully Registered.Please Login to Continue</div>';
    } else {
        echo '<div class="alert alert-warning">Not Registered</div>';
    }
?>
<?php
$sql = "select * from signup";
$result = mysqli_query($db, $sql);
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}
$fp = fopen('empdata.json', 'w');
fwrite($fp, json_encode($emparray));
fclose($fp);
?>

