<?php
if(isset($_POST['submit'])){

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$admin = $db->prepare('SELECT * FROM mmo_users WHERE email = :email and passhash = :passcode');
$admin->execute(array(
                  ':email' => $_POST['email'],
                  'passcode' => md5($_POST['password'])
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);
 
if($row['passhash']==md5($_POST['password'])&&$row['email']==$_POST['email']){
//echo "<script type=\"text/javascript\">alert('Your Login Name or Password is invalid');document.location='?mmolog';</script>";
$_SESSION['login_user'] = $_POST['email'];
header("location: admin/index.php");
}
else {
echo "<script type=\"text/javascript\">alert('Your Login Name or Password is invalid');document.location='?mmolog';</script>";
// $_SESSION['login_user'] = $_POST['username'];
// header("location: admin/index.php");

}
}}
?>