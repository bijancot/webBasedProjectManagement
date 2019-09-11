<?php
require "conn/koneksi.php";

$mmopilot = $_REQUEST["mmopilot"];
switch ($mmopilot)	{

default:
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/main.php';
	require 'view/layout/footer.php';
break;


// case 'ck':
// 	require "php/css/ck.php";
// break;

 case 'managerole':
	require 'view/layout/managerole/header.php';
	require 'view/layout/managerole/sidebar.php';
	require 'view/layout/managerole/main.php';
	require 'view/layout/managerole/footer.php';
	require 'view/layout/managerole/query.php';
 break;
 case 'addrole':
	require 'view/layout/managerole/header.php';
	require 'view/layout/managerole/sidebar.php';
	require 'view/layout/managerole/addrole.php';
	require 'view/layout/managerole/footer.php';
	require 'view/layout/managerole/query.php';
 break;
}
?>