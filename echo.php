<?php
$txt1="做汉堡";
$txt2="无聊";
$hamburg=array("レモンタツタ","エビフィレオ","KitKatアイス","ポテト");

echo "今日はバイトの一日、$txt1 はとても $txt2 です。";
echo "私一番好きなバーガーは {$hamburg[1]} です",",","{$hamburg[3]}も好きです";
echo "<br>";
print "今日はバイトの一日、$txt1 はとても $txt2 です。";
print "私一番好きなバーガーは {$hamburg[1]} です";
echo "<br>";


//EOF　定义字符串
echo <<<EOF
      $txt1 有意思
      haha
EOF;
echo "<br>";


//define常量
define("uki","got a job",true);//(name,value,case insensitive）
echo uki;
echo "<br>";
function test5(){//全局变量
    echo uki;
}
test5();
echo "<br>";

//并置运算符
echo $txt1." ".$txt2;
echo "<br>";
echo $txt1.$txt2;
echo "<br>";

//strlen()
echo strlen($txt1);
echo "<br>";
echo strlen($txt1);
echo "<br>";
echo strlen($txt2);
echo "<br>";
echo strlen($hamburg[1]);
echo "<br>";

//strops()
echo strpos($txt1,"汉");

//== ===类型比较
$txt3=66;
$txt4="66";
if($txt3 == $txt4){
    echo "值相等";
}
echo PHP_EOL;

if($txt3 === $txt4){
    echo "类型相等";
}else{
    echo "类型不相等";
}
echo "<br>";
var_dump($txt3 == $txt4);
var_dump($txt3 === $txt4);
var_dump($txt3 != $txt4);
var_dump($txt3 !== $txt4);
var_dump($txt3 <> $txt4);
echo "<br>";

//运算符号
$x=5;
$y=50;
echo ($x - $y)." ".($x * $y)." ".($x + $y)." ".($x / $y)." ".($y % $x)." ".(intdiv(10,3));//加减乘除取余整除
echo $txt1.=$txt2;
echo "<br>";
echo ++$x." ".$x++." ".--$y." ".$y--;
echo "<br>";
echo $x." ".$y;

?>