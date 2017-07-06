php 06


<br>
<?

class test
{	

	public $db;//hame chiz public dar class methods va class
	
	function _construct()
{
	$this->db= mysql_connect("localhost","root","")or die("can not connect to database");
	mysql_query("set name'utf8'",$this->db);
	mysql_select_db("PhpPrac",$this->db )or die("can not connect to database") ;
}
	
function reister($user,$pass,$email,$gender,$city)
{
	
$q="INSERT INTO `tbl_users`VALUES (NULL, '$user', '$pass', '$email', '$gender', '$city')";//query
mysqli_query($q,$this->db);
	
}
	
	
}
?>