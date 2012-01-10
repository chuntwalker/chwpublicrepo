<?
include 'class.mysqlconnect.php';
include 'class.booklist.php';

$db_host = 'localhost'; 
$db_user = 'root'; 
$db_password = 'root'; 
$db_name = 'test';

$database = new MysqlConnect($db_host, $db_user, $db_password, $db_name);
$database->dbConnect();

/*
$sql = "SELECT user_id
FROM `wp_sfgusermeta`
WHERE meta_key = 'status_option_complete'
LIMIT 0 , 30";
$result = mysql_query($sql) or die(mysql_error());
$num_results = mysql_num_rows($result);

for($i=0; $i<$num_results; $i++) {
	$row=mysql_fetch_array($result);
	$id=$row['user_id'];
	
	$sql2 = 'DELETE FROM wp_sfgusermeta WHERE user_id = "'.$id.'" AND meta_key="status_option_incomplete"';
	$res = mysql_query($sql2) or die(mysql_error());
}
*/
?>