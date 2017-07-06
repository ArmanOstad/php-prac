php02
<br>
<?

	function t1($a)
	{
		global $a;
		$a=1000;
	
	}

	function t2()
	{
		global $a;
		t1($a);
		print $a;
	}
//t2($a);
?>