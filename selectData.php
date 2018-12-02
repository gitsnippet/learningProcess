<?php
$dsn = "mysql:host=localhost;dbname=learningProcess";
$con = new PDO($dsn,"root","xyzzy");

$class =$_POST["class"];
if($class == "all")
{
    $query = "SELECT * FROM `process` ORDER BY `class`,`date`;";
}
else
{
    $query = "SELECT * FROM `process` WHERE `class` = '$class' ORDER BY `class`,`date`;";
}

$result = $con->query($query)->fetchALL();
echo json_encode($result);
?>
