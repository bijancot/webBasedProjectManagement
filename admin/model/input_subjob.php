<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){
echo "lala";
echo $jobParent			= htmlentities($_POST['jobParent']);
$idOrder			= htmlentities($_POST['order']);
$jobDescription		= htmlentities($_POST['jobDescription']); 
$timee 				= htmlentities($_POST['time']);
$itemTarget			= htmlentities($_POST['itemTarget']);
var_dump($idItem = $_POST['idItem']);
//echo $parent 			= htmlentities($_POST['parent']);
$status = "1";
$cr 	= "admin";
$idPriority	= "1";
$query = $db->prepare("INSERT INTO `mmo_job`(`idOrder`,`jobParent`, `jobDescription`,`time`, `jobStatus`, `itemTarget`, `idPriority`, `createdBy`) VALUES (:idOrder,:jobParent,:jobDesc,:timee,:jobStatus,:itemTarget,:idPriority,:createdBy)");


$query->bindParam(":jobParent",$jobParent);
$query->bindParam(":idOrder",$idOrder);
$query->bindParam(":jobDesc",$jobDescription);
$query->bindParam(":jobStatus",$status);
$query->bindParam(":timee",$timee);
$query->bindParam(":itemTarget",$itemTarget);
$query->bindParam(":idPriority",$idPriority);
$query->bindParam(":createdBy",$cr);

$query->execute();

$select = $db->prepare("SELECT idJob FROM mmo_job where jobDescription=:jobDescription");
$select->bindParam(":jobDescription", $jobDescription);
          $select->execute();
          $tampil = $select->fetchAll();
  foreach($tampil as $value){
 $idJob = $value['idJob'];
}
foreach($idItem as $it){
  echo $it;
$query1 = $db->prepare("INSERT INTO `tr_job_item`( `idJob`, `idItem`,`createdDate`,`lastUpdate`) VALUES (:idJob,:idItem,NOW(),NOW())");
$query1->bindParam(":idJob", $idJob);
$query1->bindParam(":idItem", $it);
$query1->execute();
}

 // $select = $db->prepare("SELECT idJob FROM mmo_job where idOrder=$idOrder");
 // $select->execute();
 // $tampil = $select->fetchAll();
 
 // // foreach ($tampil as $key) {
 //     echo $idid = $key['idJob'];
 // }
 // $quer2 = $db->prepare("UPDATE mmo_operator_shift set idJob=:idJob where idOrder=:idOrder");

 // $quer2->bindParam(":idJob", $idid);
 // $quer2->bindParam(":idOrder", $idOrder);
 // $quer2->execute();
 // NB : SORRY TAK KOMEN TAPI TAK CEK GAK JALAN
 echo "<script type=\"text/javascript\">alert(' Data berhasil disimpan');document.location='?mmopilot=managejob';</script>";
}else{
echo "<script type=\"text/javascript\">alert('eror');document.location='?mmopilot=managejob';</script>";
}
?>