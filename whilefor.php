<?php
//while
$i=1;
while($i<6){
    echo "$i";
    $i++;
    echo "<br>";
}

//do while
$a=1;
do{
    echo "$a";
    $a++;
}while($a<6);

//for
for($b=1;$b<6;$b++){
    echo $b.PHP_EOL;
}
echo "<br>";

//foreach
$age=array("jennie"=>"22","lisa"=>"21","rose"=>"23","jisoo"=>"23");
foreach($age as $key=>$value){
    echo $key.PHP_EOL."is".PHP_EOL.$value.PHP_EOL."years old.";
    echo "<br>";
}
?>