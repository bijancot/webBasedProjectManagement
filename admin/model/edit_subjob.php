<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

echo $idJob 				= htmlentities($_GET['id']); echo"<br>";
echo $idOrder				= htmlentities($_POST['order']); echo"<br>";
echo $jobDescription		= htmlentities($_POST['jobDescription']); echo"<br>";
echo $timee 				= htmlentities($_POST['time']); echo"<br>";
echo $itemTarget			= htmlentities($_POST['itemTarget']); echo"<br>";
echo $idPriority			= htmlentities($_POST['idPriority']);echo"<br>";
$jobParent = htmlentities($_POST['jobParent']);echo"<br>";
$status 					= "1";
$cr 						= "admin";
var_dump($idItem = $_POST['idItem']);

$query = $db->prepare("UPDATE `mmo_job` SET 
					`idOrder`='$idOrder',
					`idPriority`='$idPriority',
					`jobDescription`='$jobDescription',
					`jobStatus`='$status',
					`time`='$timee',
					`jobParent`='$jobParent',
					`itemTarget`='$itemTarget',
					`createdBy`='$cr',
					`updatedDate`=NOW() 
					WHERE `idJob`='$idJob'");

$query->execute();
	
$delete = $db->prepare("DELETE FROM tr_job_item where idJob=$idJob");

$delete->execute();

foreach($idItem as $it){
  echo $it;
$query1 = $db->prepare("INSERT INTO `tr_job_item`( `idJob`, `idItem`,`createdDate`,`lastUpdate`) VALUES (:idJob,:idItem,NOW(),NOW())");
$query1->bindParam(":idJob", $idJob);
$query1->bindParam(":idItem", $it);
$query1->execute();
}

 header('location:?mmopilot=managejob');

}
?>