<?php
require "admin/conn/koneksi.php";

$mmolog = $_REQUEST["mmolog"];
switch ($mmolog){

default:
	require 'login/login.php';
break;

//aksi login
case 'add_login':
 	require 'login/add_login.php';
break;

//register
case 'register':
 	require 'login/register.php';
break;

//aksi register
case 'add_register':
 	require 'login/add_register.php';
break;
	 
}
?>