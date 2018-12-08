<?php
$dsn = "mysql:host=localhost;dbname=learningProcess";
$class =$_POST["newClass"];
$date = date("Y-m-d");
try
{
    $con = new PDO($dsn,"root","xyzzy");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "insert into `class` (`date`,`class`) values('$date','$class')";
    $con -> exec($sql);
    echo "successfully create new class";
}
catch(PDOException $e)
{
   echo $e->getMessage(); 
}
?>


