<?php
extract($_POST);
$dsn = "mysql:host=localhost;dbname=learningProcess";
$con = new PDO($dsn,"root","xyzzy");
$query ="insert into process(`time`,`class`,`process`) 
             values('$date','$class','$process')"; 
if($con->query($query)){
        echo "成功写入数据库";
}
else{
        echo "something wrong";
}
?>

