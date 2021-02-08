<?php
if(!file_exists("welcome.txt")){
    die("not exist");
}else{
    $file = fopen("welcome.txt","r");
}
?>