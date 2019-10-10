<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$idOrder			= htmlentities($_GET['id']);
$idUser				= htmlentities($_POST['idUser']);
$currency			= htmlentities($_POST['currency']);
$price				= htmlentities($_POST['price']);
$orderNote			= htmlentities($_POST['orderNote']);
$username			= htmlentities($_POST['username']);
$password			= htmlentities($_POST['password']);
$confirm			= htmlentities($_POST['konpassword']);
if ($confirm!=$password) {
	# code...
	echo "<script>alert('Konfirmasi password salah'); location.href='?mmopilot=manageorder';</script>";
}else{

$query = $db->prepare("UPDATE `mmo_order` SET 
	`idClient`=:idUser,
	`currency`=:currency,
	`price`=:price,
	`orderNote`=:orderNote,
	`orderStatus`='0',
	`username`=:username,
	`password`=:password,
	`createdDate`=NOW(),
	`lastUpdate`=NOW(),
	`createdBy`='admin',
	`updatedBy`= null
	WHERE :idOrder");

 $query->bindParam(":idOrder", $idOrder);
 $query->bindParam(":idUser", $idUser);
 $query->bindParam(":currency", $currency);
 $query->bindParam(":price", $price);
 $query->bindParam(":orderNote", $orderNote);
 $query->bindParam(":username", $username);
 $query->bindParam(":password", $password);
 $query->execute();
 header('location:?mmopilot=manageorder');

}
}
?>