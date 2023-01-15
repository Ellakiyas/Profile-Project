<?php
session_start();
$username = "";
$db = mysqli_connect("localhost", "root", "", "database");
if (!$db) {
    echo "connection error";
}
$username = mysqli_real_escape_string($db, $_POST['username']);
$pass = mysqli_real_escape_string($db, $_POST['password']);
$password = md5($pass);
    $sql = "SELECT * FROM signup WHERE email='$username' AND password='$password'";
    $res = mysqli_query($db, $sql);
    if($res){
    if (mysqli_num_rows($res))
    {
        $row=mysqli_fetch_array($res);
        $_SESSION['username'] = $row["fname"];
        $_SESSION['userid']=trim($row["id"]);
        echo "success";
    }
    else {
        echo "Wrong Username/Password combination";
    }
}