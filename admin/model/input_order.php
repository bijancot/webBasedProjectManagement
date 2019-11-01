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

echo $idUser;
var_dump($selasa);
echo $currency;
echo $price;
echo $orderNote;

// if ($confirm!=$password) {
// 	# code...
// 	echo "<script>alert('Konfirmasi password salah'); location.href='?mmopilot=addorder';</script>";
// }else{

$query = $db->prepare("INSERT INTO `mmo_order`( `idClient`, `currency`, `price`, `orderNote`, `orderStatus`, `createdBy`) VALUES (:idUser, :currency, :price, :orderNote,'1','admin')");


 $query->bindParam(":idUser", $idUser);
 $query->bindParam(":currency", $currency);
 $query->bindParam(":price", $price);
 $query->bindParam(":orderNote", $orderNote);
 var_dump($query);
 $query->execute();


// }

foreach ($senin as $sen) {
	$insert = $db->prepare("INSERT INTO mmo_operator_shift(senin) value (:senin)");
	$insert->bindParam(':senin',$sen);
	$insert->execute();
}
foreach ($selasa as $sen) {
	$insert = $db->prepare("INSERT INTO mmo_operator_shift(selasa) value (:senin)");
	$insert->bindParam(':senin',$sen);
	$insert->execute();
}
foreach ($rabu as $sen) {
	$insert = $db->prepare("INSERT INTO mmo_operator_shift(rabu) value (:senin)");
	$insert->bindParam(':senin',$sen);
	$insert->execute();
}
foreach ($kamis as $sen) {
	$insert = $db->prepare("INSERT INTO mmo_operator_shift(kamis) value (:senin)");
	$insert->bindParam(':senin',$sen);
	$insert->execute();
}
foreach ($jumat as $sen) {
	$insert = $db->prepare("INSERT INTO mmo_operator_shift(jumat) value (:senin)");
	$insert->bindParam(':senin',$sen);
	$insert->execute();
}
foreach ($sabtu as $sen) {
	$insert = $db->prepare("INSERT INTO mmo_operator_shift(sabtu) value (:senin)");
	$insert->bindParam(':senin',$sen);
	$insert->execute();
}
foreach ($minggu as $ming) {
	$insert = $db->prepare("INSERT INTO mmo_operator_shift(minggu) value (:minggu)");
	$insert->bindParam(':minggu',$ming);
	$insert->execute();
}
header('location:?mmopilot=manageorder');
}
?>