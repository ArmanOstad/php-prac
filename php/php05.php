php05
<br>
qwe
<br>

<?
class MyClass
{
    public $public = 'Public';

    function printHello()
	{
        echo $this->public;
    }
}

$obj = new MyClass();//call class
echo $obj->public; // Works call methods




?>