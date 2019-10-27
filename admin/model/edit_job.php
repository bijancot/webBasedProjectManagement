<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$idJob 				= htmlentities($_GET['id']);
$idItem				= htmlentities($_POST['item']);
$idOrder			= htmlentities($_POST['order']);
$idUser				= htmlentities($_POST['operator']);
$jobDescription		= htmlentities($_POST['jobDescription']); 
$time 				= htmlentities($_POST['time']);
$itemTarget			= htmlentities($_POST['itemTarget']);
$itemByTime			= $itemTarget/$time;
$priority			= htmlentities($_POST['priority']);


$query = $db->prepare("UPDATE `mmo_job` SET 
						`idOperator`='$idUser',
						`idOrder`='$idOrder',
						`jobParent`=null,
						`idItem`='$idItem',
						`jobDescription`='$jobDescription',
						`jobStatus`='0',
						`time`='$time',
						`itemTarget`='$itemTarget',
						`itemByTime`='$itemByTime',
						`priority`='$priority',
						`createdBy`='admin',
						`updateBy`='',
						`updatedDate`=NOW(),
						`status`=''
						WHERE `idJob`='$idJob'");

 $query->execute();
 header('location:?mmopilot=managejob');

}
?>