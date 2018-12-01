<?php
$dsn = "mysql:host=localhost;dbname=learningProcess";
$con = new PDO($dsn,"root","xyzzy");

$class =$_POST["class"];
if($class == "all"){
    $query = "select * from process order by class,date";
}
else{
    $query = "select * from process where class = '$class' order by class,date";
}

$result = $con->query($query)->fetchALL();
echo json_encode($result);
?>
