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
	require 'view/layout/Roleheader.php';
	require 'view/layout/Rolesidebar.php';
	require 'view/layout/Rolemain.php';
	require 'view/layout/Rolefooter.php';
 break;
}
?>