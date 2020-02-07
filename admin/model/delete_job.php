<?php
echo $id = $_GET['id'];

$query = $db->prepare("DELETE FROM `mmo_job` WHERE idJob= :id");
$query->bindParam(":id", $id);
$query->execute();

$query2 = $db->prepare("DELETE FROM `tr_job_item` WHERE idJob= :id");
$query2->bindParam(":id", $id);
$query2->execute();
// header('location:?mmopilot=manageitem');
echo "<script type=\"text/javascript\">alert(' Data berhasil dihapus');document.location='?mmopilot=managejob';</script>"
?>