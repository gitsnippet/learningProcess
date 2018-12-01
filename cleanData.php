<?php
$dsn = "mysql:host=localhost;dbname=learningProcess";
$con = new PDO($dsn,"root","xyzzy");

$query = "create table tmp(select  * from process  
                 where time in (select max(time) from process  
                                group by class,date));
           drop table process;
           rename table tmp to process; ";

$result = $con->prepare($query);
$result->execute();
$code = $result->errorCode();
if($code == "00000"){
    echo "clean the table success";
}
else{
    var_dump($result->errorInfo());
}
?>



