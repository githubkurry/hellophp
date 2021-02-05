<?php
//下拉菜单单选
//$_GET用于收集method="get"表单中的值，对任何人都可见，发送的信息量有限制
//$_POST用于收集method="post"表单中的值，对任何人都不可见，发送的信息量无限制
$q = isset($_GET['q'])?htmlspecialchars($_GET['q']):'';
if($q){
    if($q =='google'){
        echo 'google<br>http://www.google.com';
    }else if($q =='yahoo'){
        echo 'yahoo<br>http://www.yahoo.com';
    }else if($q == 'amazon'){
        echo 'amazon<br>http://www.amazon.com';
    }
}else{
?>
<form action= "" method="get">
<select name='q'>
<option value="">选择一个站点</option>
<option value="google">google</option>
<option value="yahoo">yahoo</option>
<option value="amazon">amazon</option>
</select>
<input type='submit' value='提交'>
</form>
<?php
}
?>

<?php
//下拉菜单多选
$q = isset($_POST['q'])? $_POST['q']:'';
if(is_array($q)){
    $sites = array(
        'google'=>'google<br>http://www.google.com',
        'yahoo'=>'yahoo<br>http://www.yahoo.com',
        'amazon'=>'amazon<br>http://www.amazon.com',
    );
    foreach($q as $val){
        echo $sites[$val].PHP_EOL;
    }
}else{
?>
<form action= "" method="post">
<select multiple="multiple" name="q[]">
<option value="">选择一个站点</option>
<option value="google">google</option>
<option value="yahoo">yahoo</option>
<option value="amazon">amazon</option>
</select>
<input type='submit' value='提交'>
</form>
<?php
}
?>


<?php
//单选按钮表单
$q=isset($_GET['q'])?htmlspecialchars($_GET['q']):'';
if($q){
    if($q =='google'){
        echo 'google<br>http://www.google.com';
    }else if($q =='yahoo'){
        echo 'yahoo<br>http://www.yahoo.com';
    }else if($q == 'amazon'){
        echo 'amazon<br>http://www.amazon.com';
    }
}else{
?>
<form action="" method="get">
<input type="radio" name="q" value="google"/>google
<input type="radio" name="q" value="yahoo"/>yahoo
<input type="radio" name="q" value="amazon"/>amazon
<input type="submit" value="提交">
</form>
<?php
}
?>


<?php
//checkbox复选框
$q=isset($_POST['q'])?$_POST['q']:'';
if(is_array($q)){
    $sites = array(
        'google'=>'google<br>http://www.google.com',
        'yahoo'=>'yahoo<br>http://www.yahoo.com',
        'amazon'=>'amazon<br>http://www.amazon.com',
    );
    foreach($q as $val){
        echo $sites[$val].PHP_EOL;
    }
}else{
?>
<form action="" method="post">
<input type="checkbox" name="q[]" value="google">google<br>
<input type="checkbox" name="q[]" value="yahoo">yahoo<br>
<input type="checkbox" name="q[]" value="amazon">amazon<br>
<input type="submit" value="提交">
</form>
<?php
}
?>