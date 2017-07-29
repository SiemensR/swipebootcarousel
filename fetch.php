<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);
$conn = new mysqli("first", "second", "third");
$result = $conn->query("SELECT name FROM ".$obj->table." LIMIT ".$obj->limit);
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);


?>

<!--

$json_data = array ('first'=>1,'name'=>"ivan",'country'=>'Russia',"office"=>array("yandex"," management"));
echo json_encode($json_data);

 -->
