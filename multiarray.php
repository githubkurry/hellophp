<?php
//multi-dimensional array
$idol = array(
    "bp" => array(4,1),
    "red velvet" => array(5,2),
    "izone" => array(11,3)
);
print("<pre>");//格式化输出数组
print_r($idol);
print("<pre>");
echo $idol['bp'][0]."<br>";



//date()
echo date("Y/m/d")."<br>";
echo date("Y.m.d")."<br>";
echo date("Y-m-d")."<br>";


?>