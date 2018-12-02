<?php
$dsn = "mysql:host=localhost;dbname=learningProcess";
$con = new pdo($dsn,"root","xyzzy");

$query = "CREATE TABLE `tmp`(SELECT  * FROM `process`  
                 WHERE `time` IN (SELECT MAX(`time`) FROM `process`
                 GROUP BY `class`,`date`,
                 ORDER BY `class`,`date`));
           DROP TABLE `process`;
           RENAME TABLE `tmp` TO `process`; 
           ALTER TABLE `process` DROP `id`;
           ALTER TABLE `process` AUTO_INCREMENT=1;
           ALTER TABLE `process` ADD `id` INT(4) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY;
           ALTER TABLE `process` MODIFY `id` INT(4) UNSIGNED NOT NULL AUTO_INCREMENT FIRST;
          ";

$result = $con->prepare($query);
$result->execute();
$code = $result->errorcode();
if($code == "00000")
{
    echo "clean the table success";
}
else
{
    var_dump($result->errorInfo());
}
?>



