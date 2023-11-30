<?php
header("Content-Type: application/json");
$db=new mysqli ("localhost","alumno","alumno","julio");
//var_dump($db);
$sql="SELECT * FROM `estaciones`";
$response=$db->query($sql);
//var_dump($response);
$matrix=$response-> fetch_all(MYSQLI_ASSOC);
echo json_encode($matrix);
?>