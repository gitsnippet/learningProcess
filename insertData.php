<?php
$date = date("Y-m-d");
$time = date('Y-m-d H:i:s',time());
$class = trim($_POST["class"]);
$process = trim($_POST["process"]);

$dsn = "mysql:host=localhost;dbname=learningProcess";
$con = new PDO($dsn,"root","xyzzy");

$query ="insert into process(`date`,`time`,`class`,`process`) 
             values('$date','$time','$class','$process')"; 
if($con->query($query)){
    echo "成功写入数据库";
}
else{
    print_r($con->errorInfo());
}
?>
 
