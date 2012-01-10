<? 
class MysqlConnect {
	private $host; 
	private $username; 
	private $password;
	private $dbname; 
	private $dbconn;
	
	function __construct($host, $username, $password, $dbname) {
		//set the database config data here
		$this->host = $host; 
    	$this->username = $username; 
		$this->password = $password;
		$this->dbname = $dbname;
	}
	
	public function dbConnect() {
		$this->dbconn = mysql_connect($this->host, $this->username, $this->password) or die("Cannot connect to Database");
		mysql_select_db($this->dbname);
	}
	
	public function dbQuery($sql) {
		$result=mysql_query($sql, $this->dbconn) or die(mysql_error());
		return $result;
	}
}
?>