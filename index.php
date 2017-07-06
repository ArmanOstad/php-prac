
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PracPhp</title>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<script language="javascript" type="text/javascript" src="js/main.js">
	
	</script>
</head>

<body>
<?
	include ("php/php03.php");
	include ("php/php05.php");	
	echo("<br>");
	include ("php/php06.php");
	$main = new test();
?>

<br>
<?
	include ("php/php04.php");
	$main = new test2();
	
?>

<br>			
<?
	include ("php/php02.php");
	//require("");//file peida nashe fatal mide
    t2($a);
?>
<br>			

</body>
</html>