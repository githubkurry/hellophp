<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
//超级全局变量

//1.$GLOBALS
$a=10;
$b=9;

function multiplication(){
    $GLOBALS['c'] = $GLOBALS['a'] * $GLOBALS['b'];
}
multiplication();
echo $c;
echo "<br>";

//2.$_SERVER
echo $_SERVER['PHP_SELF'];//file name
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

//3.$_POST  //收集表单数据
$name=$_POST['fname'];
echo $name;
echo "<br>";


//4.$_REQUEST   //收集html表单提交的数据
$name = $_REQUEST['fname']; 
echo $name; 
echo "<br>";




?>
</body>
</html>