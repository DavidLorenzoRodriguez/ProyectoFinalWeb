<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$admin= $_POST['admin'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$admin = stripslashes($admin);
$admin = addslashes($admin);
$email = stripslashes($email);
$email = addslashes($email);
$mob = stripslashes($mob);
$mob = addslashes($mob);

$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

if ($admin == 'E')
    $admin = true;
else
    $admin = false;

    $q3 = mysqli_query($con, "INSERT INTO user (name, gender, email, mob, password, admin) VALUES ('$name', '$gender', '$email', '$mob', '$password', '$admin')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;
$_SESSION["admin"] = $admin;
mysqli_close($con);
header("location:account.php?q=1");
}
else
{
mysqli_close($con);
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>