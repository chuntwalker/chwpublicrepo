<?
include 'class.mysqlconnect.php';
include 'class.booklist.php';

$db_host = 'localhost'; 
$db_user = 'root'; 
$db_password = 'root'; 
$db_name = 'test';

$database = new MysqlConnect($db_host, $db_user, $db_password, $db_name);
$database->dbConnect();
?>