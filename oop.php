<?php
//类定义
class phpClass{
    var $song;
    var $color;

function setSong($a){
    $this->song = $a;
}

function getSong(){
    echo $this->song.PHP_EOL;
}

function setColor($a){
    $this->color = $a;
}

function getColor(){
    echo $this->color.PHP_EOL;
}
}
//创建对象
$google = new phpClass;
$yahoo = new phpClass;
$amazon = new phpClass;

//调用函数--设置
$google->setSong("bleed");
$yahoo->setSong("breakeven");
$amazon->setSong("blue");

$google->setColor("yellow");
$yahoo->setColor("red");
$amazon->setColor("blue");

//调用函数--获取
$google->getSong();
$yahoo->getSong();
$amazon->getSong();

$google->getColor();
$yahoo->getColor();
$amazon->getColor();



//构造函数
class destruct{
    function construct(){
        echo "构造函数\n";
        $this->name = "destruct";
    }
    function destruct(){
        echo "销毁".$this->name."<br>";
    }
}
$obj = new destruct();


//继承
class cSite extends phpClass{
    var $cate;
    function steCate($a){
        $this->cate= $a;
    }
    function getCate(){
        echo $this->cate.PHP_EOL;
    }
}

//访问控制--无定义默认公有
class myClass{
    public $pub = 'public';
    protected $pro = 'protected';
    private $pri = 'private';

    function echoHi(){
        echo $this->pub;
        echo $this->pro;
        echo $this->pri;
    }
}

$obj1 = new myClass();
echo $obj1->pub;//1
echo $obj1->pro;//0
echo $obj1->pri;//0
$obj1->echoHi();

class myClass2 extends myClass{
    protected $pro = "protected2";
    function echoHi(){
        echo $this->pub;
        echo $this->pro;
        echo $this->pri;
    }
}
$obj2 = new myClass1();
echo $obj2->pub;//1
echo $obj2->pro;//0
echo $obj2->pri;//undefine
$obj2->echoHi();//protected2


//interface
interface iT{
    public function setH($name,$var);
    public function getH($temp);
}
class temp implements iT{
    private $vars = array();

    public function setH($name,$var){
        $this->vars[$name] = $var;
    }
    public function getH($temp){
        foreach($this->vars as $name =>$value){
            $temp = str_replace('{'.$name.'}',$value,$temp);
        }
        return $temp;
    }
}
?>