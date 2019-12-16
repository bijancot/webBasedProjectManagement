<?php
//require'../conn/koneksi.php';
if(isset($_POST['submit'])){

$idUser				= htmlentities($_POST['idUser']);
$currency			= htmlentities($_POST['currency']);
$price				= htmlentities($_POST['price']);
$orderNote			= htmlentities($_POST['orderNote']);
// $username			= htmlentities($_POST['username']);
// $password			= htmlentities($_POST['password']);
// $confirm			= htmlentities($_POST['konpassword']);
$senin				= $_POST['senin'];
$selasa				= $_POST['selasa'];
$rabu				= $_POST['rabu'];
$kamis				= $_POST['kamis'];
$jumat				= $_POST['jumat'];
$sabtu				= $_POST['sabtu'];
$minggu				= $_POST['minggu'];

$idUser;
($selasa);
$currency;
$price;
$orderNote;

// if ($confirm!=$password) {
// 	# code...
// 	echo "<script>alert('Konfirmasi password salah'); location.href='?mmopilot=addorder';</script>";
// }else{

$query = $db->prepare("INSERT INTO `mmo_order`( `idClient`, `currency`, `price`, `orderNote`, `orderStatus`, `createdBy`) VALUES (:idUser, :currency, :price, :orderNote,'1','admin')");


 $query->bindParam(":idUser", $idUser);
 $query->bindParam(":currency", $currency);
 $query->bindParam(":price", $price);
 $query->bindParam(":orderNote", $orderNote);
//  var_dump($query);
 $query->execute();


$select = $db->prepare("SELECT idOrder from mmo_order order by createdDate DESC limit 0,1");
$select->execute();
$tampil = $select->fetchAll();
 
 foreach ($tampil as $key) {
     echo $idOrder = $key['idOrder'];
 }
// }
$urut=1;
foreach ($senin as $sen) {
	echo $sen;
	$insert = $db->prepare("INSERT INTO mmo_operator_shift(idOrder,urut,senin) value (:idOrder,:urut,:senin)");
	$insert->bindParam(':idOrder',$idOrder);
	$insert->bindParam(':senin',$sen);
	$insert->bindParam(':urut',$urut);
	$insert->execute();
	$urut=$urut+1;
}
$urut=1;
foreach ($selasa as $sen) {
	// echo $sen;
	$insert = $db->prepare("UPDATE mmo_operator_shift set selasa=:senin where idOrder=:idOrder && urut=:urut");
	$insert->bindParam(':idOrder',$idOrder);
	$insert->bindParam(':senin',$sen);
	$insert->bindParam(':urut',$urut);
	$insert->execute();
	$urut=$urut+1;
}
$urut=1;
foreach ($rabu as $sen) {
	$insert = $db->prepare("UPDATE mmo_operator_shift set rabu=:senin where idOrder=:idOrder && urut=:urut");
	$insert->bindParam(':idOrder',$idOrder);
	$insert->bindParam(':senin',$sen);
	$insert->bindParam(':urut',$urut);
	$insert->execute();
	$urut=$urut+1;
}
$urut=1;
foreach ($kamis as $sen) {
	$insert = $db->prepare("UPDATE mmo_operator_shift set kamis=:senin where idOrder=:idOrder && urut=:urut");
	$insert->bindParam(':idOrder',$idOrder);
	$insert->bindParam(':senin',$sen);
	$insert->bindParam(':urut',$urut);
	$insert->execute();
	$urut=$urut+1;
}
$urut=1;
foreach ($jumat as $sen) {
	$insert = $db->prepare("UPDATE mmo_operator_shift set jumat=:senin where idOrder=:idOrder && urut=:urut");
	$insert->bindParam(':idOrder',$idOrder);
	$insert->bindParam(':senin',$sen);
	$insert->bindParam(':urut',$urut);
	$insert->execute();
	$urut=$urut+1;
}
$urut=1;
foreach ($sabtu as $sen) {
	$insert = $db->prepare("UPDATE mmo_operator_shift set sabtu=:senin where idOrder=:idOrder && urut=:urut");
	$insert->bindParam(':idOrder',$idOrder);
	$insert->bindParam(':senin',$sen);
	$insert->bindParam(':urut',$urut);
	$insert->execute();
	$urut=$urut+1;
}
$urut=1;
foreach ($minggu as $ming) {
	$insert = $db->prepare("UPDATE mmo_operator_shift set minggu=:minggu where idOrder=:idOrder && urut=:urut");
	$insert->bindParam(':idOrder',$idOrder);
	$insert->bindParam(':minggu',$ming);
	$insert->bindParam(':urut',$urut);
	$insert->execute();
	$urut=$urut+1;
}
header('location:?mmopilot=manageorder');
}
?>