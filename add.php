<?php
$date = trim($_POST["date"]);
$class = trim($_POST["class"]);
$process = trim($_POST["process"]);

$dsn = "mysql:host=localhost;dbname=learningProcess";
$con = new PDO($dsn,"root","xyzzy");
if($date == ""){
    $date = date("Y-m-d");
}

$query ="insert into process(`time`,`class`,`process`) 
             values('$date','$class','$process')"; 
if($con->query($query)){
    echo "成功写入数据库";
}
else{
    echo "something wrong";
}
?>

