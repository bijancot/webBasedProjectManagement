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

}
?>