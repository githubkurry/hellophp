<?php
$allowedExts = array("gif","jpeg","jpg","png");
$temp = explode(".",$_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);

if(($_FILES["file"]["type"] == "image/gif")||
($_FILES["file"]["type"] == "image/jpeg")||
($_FILES["file"]["type"] == "image/jpg")||
($_FILES["file"]["type"] == "image/png")&&
($_FILES["file"]["size"] < 307200)&&
in_array($extension, $allowedExts)){
    if($_FILES["file"]["error"] > 0){
        echo "error：".$_FILES["file"]["error"]."<br>";
    }else{
        echo "filename：".$_FILES["file"]["name"]."<br>";
        echo "filetype：".$_FILES["file"]["type"]."<br>";
        echo  "size：".$_FILES["file"]["size"]."<br>";
        echo "tem position：".$_FILES["file"]["tmp_name"]."<br>";

        if(file_exists("upload/".$_FILES["file"]["name"])){
            echo $_FILES["file"]["name"]."file already exists";
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
        }
    }
}else{
    echo "not legitimate";
}
?>