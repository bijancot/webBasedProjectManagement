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
	require 'view/layout/role/manage_role.php';
	require 'view/layout/footer.php';
 break;

//addrole
  case 'addrole':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/role/add_role.php';
	require 'view/layout/footer.php';
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

 //editjob
case 'editjob':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/job/editjob.php';
	require 'view/layout/footer.php';
 break;

 //detailjob
case 'detailjob':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/job/detailjob.php';
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

 //edititem
case 'edititem':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/item/edititem.php';
	require 'view/layout/footer.php';
 break;

 //detailitem
case 'detailitem':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/item/detailitem.php';
	require 'view/layout/footer.php';
 break;

 //manageorder
case 'manageorder':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/order/main.php';
	require 'view/layout/footer.php';
 break;

 //addorder
case 'addorder':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/order/addorder.php';
	require 'view/layout/footer.php';
 break;

  //editorder
case 'editorder':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/order/editorder.php';
	require 'view/layout/footer.php';
 break;

 //detailorder
case 'detailorder':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/order/detailorder.php';
	require 'view/layout/footer.php';
 break;

  //edit_role
case 'edit_role':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/role/editRole.php';
	require 'view/layout/footer.php';
break;

//aksi addjob
 case 'input_job':
 	require 'model/input_job.php';
 	break;

//aksi hapusjob
 case 'delete_job':
 	require 'model/delete_job.php';
 	break;

//aksi additem
 case 'input_item':
 	require 'model/input_item.php';
	 break;

//aksi edititem
 case 'edit_item':
 	require 'model/edit_item.php';
	 break;
	 
//aksi hapusitem
 case 'delete_item':
 	require 'model/delete_item.php';
 	break;

//aksi addorder
 case 'input_order':
 	require 'model/input_order.php';
	break;
	
//aksi editorder
 case 'edit_order':
 	require 'model/edit_order.php';
 	break;

//aksi hapusorder
 case 'delete_order':
 	require 'model/delete_order.php';
 	break;

//aksi addrole
case 'add_role':
require 'model/input_role.php';
break;

//Input role
	 case 'input_role':
 	require 'model/input_role.php';
	 break;
	 
//aksi editrole
case 'editedRole':
require 'model/edit_role.php';
break;
}
?>