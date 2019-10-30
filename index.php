<?php
require "admin/conn/koneksi.php";

$mmolog = $_REQUEST["mmolog"];
switch ($mmolog){

default:
	require 'login/register.php';
break;
//aksi register
case 'add_register':
 	require 'login/add_register.php';
break;
	 
}
?>