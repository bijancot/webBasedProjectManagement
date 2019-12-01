<?php
include("../admin/conn/koneksi.php");
session_start();
$user_check=$_SESSION['login_user'];
$admin = $db->prepare('SELECT * FROM mmo_users WHERE email = :username');
$admin->execute(array(
                  ':username' => $user_check
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);

$login_session=$row['email'];
$login_job=$row['job'];
$login_role=$row['roleId'];

if(!isset($login_session))
{
    header("Location: ../index.php");
}
?>