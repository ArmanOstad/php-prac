php01
<br>
<?

function t1($a, $b)
{
	print $a." ".$b;
	echo "<br>";
	echo fff;
	return $a+$b;//be ma baegardon
	global $a,$b;
	global $d;
	$d = 10;
}
echo "<br>";

t1(100,"arman");
echo "<br>";
echo t1(100,30);
$c=t1(100,30);
echo ssss;	
echo "<br>";
return c;
print $b;

print $d;	

echo "<br>";

function t2 ()
{
	global $a,$b;
	t($a,$b);
	print $a+$b+$a;
	
}
	t2();	
	
?>
	