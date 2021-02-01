<?php
//数组
$blackpink=array("jennie","lisa","rose","jisoo");
echo "i like"." ".$blackpink[0]." "."very much";
echo "<br>";


//count()
echo count($blackpink);
echo "<br>";

//遍历
for($x=0;$x<count($blackpink);$x++){
    echo $blackpink[$x];
    echo "<br>";
}

//关联数组
$age=array("jennie"=>"22","lisa"=>"21","rose"=>"23","jisoo"=>"23");
echo "jennie is"." ".$age["jennie"]." "."years old.";
echo "<br>";

//遍历关联数组
foreach($age as $name=>$value){
    echo "key:".$name.",value:".$value;
    echo "<br>";
}

//sort()
sort($blackpink);
print_r($blackpink);
echo "<br>";

//rsort()
rsort($blackpink);
print_r($blackpink);
echo "<br>";

//asort()--value 
asort($age);
print_r($age);
echo "<br>";

//arsort()--value
arsort($age);
print_r($age);
echo "<br>";

//ksort()--name
ksort($age);
print_r($age);
echo "<br>";

//krsort()--name
krsort($age);
print_r($age);
echo "<br>";
?>