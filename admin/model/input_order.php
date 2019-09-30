<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$idOrder			= htmlentities($_POST['idOrder']);
$idUser				= htmlentities($_POST['idUser']);
$currency			= htmlentities($_POST['currency']);
$price				= htmlentities($_POST['price']);
$orderNote			= htmlentities($_POST['orderNote']);
$username			= htmlentities($_POST['username']);
$password			= htmlentities($_POST['password']);
$confirm			= htmlentities($_POST['konpassword']);
if ($confirm!=$password) {
	# code...
	echo "<script>alert('Konfirmasi password salah'); location.href='?mmopilot=addorder';</script>";
}else{

$query = $db->prepare("INSERT INTO `mmo_order`(`idOrder`, `idClient`, `currency`, `price`, `orderNote`, `orderStatus`, `username`, `password`, `createdDate`, `lastUpdate`, `createdBy`, `updatedBy`) VALUES (:idOrder, :idUser, :currency, :price, :orderNote,'0', :username, :password, NOW(), NOW(),'admin',null)");

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