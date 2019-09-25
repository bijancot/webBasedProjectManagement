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

//managerole
case 'managerole':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/managerole/main.php';
	require 'view/layout/footer.php';
	require 'view/layout/managerole/query.php';
 break;

//addrole
  case 'addrole':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/addrole/addrole.php';
	require 'view/layout/footer.php';
	require 'view/layout/addrole/query.php';
 break;

//managejob
case 'managejob':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/job/main.php';
	require 'view/layout/footer.php';
 break;

//addjob
case 'addjob':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/job/addjob.php';
	require 'view/layout/footer.php';
 break;

//manageitem
case 'manageitem':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/item/main.php';
	require 'view/layout/footer.php';
 break;

 //additem
case 'additem':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/item/additem.php';
	require 'view/layout/footer.php';
 break;

//aksi addjob
 case 'input_job':
 	require 'model/action_input.php';
 	break;

//aksi additem
 case 'input_item':
 	require 'model/input_item.php';
	 break;
	 
//aksi hapusitem
 case 'delete_item':
 	require 'model/delete_item.php';
 	break;

<<<<<<< HEAD
	 //aksi addrole
case 'add_role':
require 'model/input_role.php';
break;
=======
	 case 'input_role':
 	require 'model/input_role.php';
 	break;
>>>>>>> 22f4f3bdd3859edb8930ba76bf797700821ebe3a

}
?>