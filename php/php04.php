php 04


<br>
<?

class test2
{	

	public $db;//hame chiz public dar class methods va class
/*	
	function t3($m)
	{
		$m=1111111;
		global $m;
	
	}

	function test()
	{
		global $m;
		$this -> t3();//call method
		print $m;
	}*/

	
	function _construct()
{
	print "رشوند آویی";
}
	
}


$obj = new test2();
echo $obj->_construct();

?>