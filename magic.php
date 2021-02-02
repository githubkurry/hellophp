<?php
namespace MyProject;
//__NAMESPACE__
echo 'spacename:'.__NAMESPACE__.'<br>';


//__LINE__
echo "row".__LINE__;
echo "<br>";

//__FILE__
echo "file path".PHP_EOL.__FILE__;
echo "<br>";

//__DIR__
echo "director".PHP_EOL.__DIR__;
echo "<br>";

//__FUNCTION__
function wendy(){
    echo "function:"." ".__FUNCTION__;
}
wendy();
echo "<br>";

//__CLASS__
class cname{
    function fname(){
        echo 'cname:'.__CLASS__.'<br>';
        echo 'fname:'.__FUNCTION__.'<br>';
    }
}
$t = new cname();
$t->fname();

//__METHOD__
function mname(){
    echo "method:".__METHOD__.'<br>';
}
mname();


//__NAMESPACE__

echo 'spacename:'.__NAMESPACE__.'<br>';
?>