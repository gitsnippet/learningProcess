<?php
require('/usr/local/lib/Smarty/libs/Smarty.class.php');
$des = '/var/www/html/learningProcess/';

$smarty = new Smarty();
 
$smarty->setTemplateDir($des.'smarty/templates');
$smarty->setCompileDir($des.'smarty/templates_c');
$smarty->setCacheDir($des.'smarty/cache');
$smarty->setConfigDir($des.'smarty/configs');

$dsn = "mysql:host=localhost;dbname=learningProcess";
$con = new PDO($dsn,"root","xyzzy");
$sql = "select * from `class`";
$stmt = $con->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();
$smarty->assign("res",$res);
$smarty->display("./smarty/templates/view.tpl");
?>
