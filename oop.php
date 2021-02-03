<?php
//类定义
class phpClass{
    var $song;
    var $color;

function setSong($a){
    $this->song = $a;//$song=$a
}

function getSong(){
    echo $this->song.PHP_EOL;//输出$song
}

function setColor($a){
    $this->color = $a;//$color=$a
}

function getColor(){
    echo $this->color.PHP_EOL;//输出$color
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
        $this->name = "destruct";//$name="destruct"
    }
    function destruct(){
        echo "销毁".$this->name."<br>";
    }
}
$obj = new destruct();//创建对象


//继承
class cSite extends phpClass{
    var $cate;
    function setCate($a){
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
echo $obj1->pub;//输出
echo $obj1->pro;//错误
echo $obj1->pri;//错误
$obj1->echoHi();

class myClass2 extends myClass{
    protected $pro = "protected2";//私有在子类里不可调用
    function echoHi(){
        echo $this->pub;
        echo $this->pro;
        echo $this->pri;
    }
}
$obj2 = new myClass1();
echo $obj2->pub;//输出
echo $obj2->pro;//错误
echo $obj2->pri;//undefine
$obj2->echoHi();//protected2


//interface 设置空的函数
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

//常量
class myClass3{
    const constant = '常量值';
    function showConst(){
        echo self::constant.PHP_EOL;
    }
}
echo myClass3::constant.PHP_EOL;

$classname = "myClass3";
echo $classname::constant.PHP_EOL;

$class= new myClass3();
$class->showConst();

echo $class::constant.PHP_EOL;


//抽象类
abstract class abstractClass{
    //强制定义
    abstract protected function getValue();
    abstract protected function mValue($m);

    public function echo(){
        echo $this->getValue().PHP_EOL;
    }
}

class concreteClass1 extends abstractClass{
    protected function getValue(){
        return "concreteClass1";
    }
    public function mValue($m){
        return "{$m}concreteClass1";
    }
}
class concreteClass2 extends abstractClass{
    public function getValue(){
        return "concreteClass2";
    }
    public function mValue($m){
        return "{$m}concreteClass2";
    }
}
$class1 = new concreteClass1;
$class1->echo();
echo $class1->mValue('name:').PHP_EOL;

$class2 = new concreteClass2;
$class2->echo();
echo $class2->mValue('name:').PHP_EOL;

//static 不实例化直接访问$this不可用
class foo{
    public static $sta= 'foo';

    public function staValue(){
        return self::$sta;
    }
}
print foo::$sta.PHP_EOL;
$foo= new foo();
print $foo->staValue().PHP_EOL;


//调用父类构造方法
class parentClass{
    function constr(){
        echo "parent cons".PHP_EOL;
    }
}
class childClass extends parentClass{
    function constr(){
        parent::_construct();
        echo "child cons".PHP_EOL;
    }
}
$obj = new parentClass();
$obj = new childClass();


?>