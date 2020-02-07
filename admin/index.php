<?php
require "conn/koneksi.php";
include('../login/session.php');

$mmopilot = $_REQUEST["mmopilot"];
switch ($mmopilot)	{

default:
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/main.php';
	require 'view/layout/footer.php';
break;

//managestaff
case 'manageusers':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/user/main.php';
	require 'view/layout/footer.php';
 break;
 case 'managestaff':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/user/managestaff.php';
	require 'view/layout/footer.php';
 break;
//stafftorole
case 'stafftorole':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/user/stafftorole.php';
	require 'view/layout/footer.php';
break;
case 'inputstaffrole':
	require 'model/input_staffrole.php';
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
	require 'view/layout/footer2.php';
 break;

 //addrole
 case 'timeline':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/progress/timeline.php';
	require 'view/layout/footer2.php';
 break;

//managejob
case 'managejob':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/job/main.php';
	require 'view/layout/footer2.php';
 break;

//addjob
case 'addjob':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/job/addjob.php';
	require 'view/layout/footer2.php';
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

 //addsubjob
case 'add_subjob':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/subjob/add_subjob.php';
	require 'view/layout/footer.php';
 break;

 //editsubjob
case 'editsubjob':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/subjob/editsubjob.php';
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

 //templateitem
case 'templateitem':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/item/templateitem.php';
	require 'view/layout/footer.php';
 break;

 //templateitem
case 'addtemplate':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/item/addtemplate.php';
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

	//progressreport
	case 'progressreport':
		require 'view/layout/header.php';
		require 'view/layout/sidebar.php';
		require 'view/layout/progress/progressreport.php';
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
	require 'view/layout/footer2.php';
break;

 //addoperator
case 'addstaff':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/user/addoperator.php';
	require 'view/layout/footer.php';
 break;

  //addadmin
// case 'addadmin':
// 	require 'view/layout/header.php';
// 	require 'view/layout/sidebar.php';
// 	require 'view/layout/user/addadmin.php';
// 	require 'view/layout/footer.php';
//  break;

//aksi addadmin
 case 'input_template':
 	require 'model/input_template.php';
 	break;

//aksi addadmin
 case 'input_addadmin':
 	require 'model/input_addadmin.php';
 	break;

//aksi addoperator
 case 'input_addoperator':
 	require 'model/input_addoperator.php';
 	break;

//aksi addjob
 case 'input_job':
 	require 'model/input_job.php';
 	break;

//aksi addsubjob
 case 'input_subjob':
 	require 'model/input_subjob.php';
 	break;

//aksi deletesubjob
 case 'delete_subjob':
 	require 'model/delete_subjob.php';
 	break;

//aksi hapusjob
 case 'delete_job':
 	require 'model/delete_job.php';
 	break;

//aksi editjob
 case 'edit_job':
 	require 'model/edit_job.php';
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

//aksi add
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

//logout
case 'logout':
	require '../login/logout.php';
	break;

	 //templateitem
case 'templateitem':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/item/templateitem.php';
	require 'view/layout/footer.php';
 break;

 //templateitem
case 'addtemplate':
	require 'view/layout/header.php';
	require 'view/layout/sidebar.php';
	require 'view/layout/item/addtemplate.php';
	require 'view/layout/footer.php';
 break;

 //aksi addadmin
 case 'input_template':
	require 'model/input_template.php';
	break;
}
?>