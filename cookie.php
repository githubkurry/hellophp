<?php
    $expire = time() + 60*60*24*30;
    setcookie("user","google",$expire);
    setcookie("guo","amazon",$expire);
    echo $_COOKIE["user"];
    echo "<br>";
    print_r($_COOKIE);

    if (isset($_COOKIE["guo"])){
        echo "哈哈".$_COOKIE["guo"];
    }else{
        echo "普通访客";
    }
?>