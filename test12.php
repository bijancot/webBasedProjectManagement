<?php
$conn = mysqli_connect('192.168.79.3', 'budosen', 'bijan2089', 'mmopilot');
// mysqli_set_charset($conn, 'utf8');
$query = mysqli_query($conn, 'SELECT jobDescription,idJob,SUBSTRING_INDEX(unix_timestamp(time), \'.\', 1) as end,UNIX_TIMESTAMP(createdDate) as start FROM mmo_job order by idJob');
while($row = mysqli_fetch_assoc($query)) {
	$data[] = array(model=>$row['jobDescription'],
		current=>0,deals=>
		array([
		rentedTo=>$row['idJob'],
		from=>(int)$row['start'],
		to=>(int)$row['end']]
	));
}

$json = json_encode($data);
$array_final = preg_replace('/"([a-zA-Z]+[a-zA-Z0-9_]*)":/','$1:',$json);

echo $array_final;
?>