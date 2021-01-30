<?php
$x=5;  //全局变量，函数内不能使用
$y=10;
$z=$x*$y;
$txt="hello";
echo $z;
echo $txt;
echo "<br>";

function test(){
    $a=6;//局部变量
    echo $a;
    echo "<br>";
    echo $x;
}
test();
echo "<br>";

echo $a;
echo "<br>";

function test2(){
    global $x;//global以后的全局变量可在函数内使用
    echo $x;
}
test2();
echo "<br>";

function test3(){
    $GLOBALS['z']=$GLOBALS['y']/$GLOBALS['x'];//GLOBALS数组储存全局变量
}
test3();
echo $z;
echo "<br>";

function test4(){
    static $a=6;//static声明变量，函数完成后不会被删除
    echo $a." ";
    $a++;
}
test4();
test4();
test4();
?>