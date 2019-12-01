<?php
if(isset($_POST['submit'])){

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$admin = $db->prepare('SELECT * FROM mmo_users WHERE email = :username and passhash = :passcode');
$admin->execute(array(
                  ':username' => $_POST['username'],
                  'passcode' => md5($_POST['password'])
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);
 
if(empty($row['username'])){
echo "<script type=\"text/javascript\">alert('Your Login Name or Password is invalid');document.location='?mmolog';</script>";

}
else {
$_SESSION['login_user'] = $_POST['username'];
header("location: admin/index.php");
}
}}
?>