<?php
function checkNum($number){
    if($number > 1){
        throw new Exception("value must less than 1");
    }else{
        return true;
    }
}
try{
    checkNum(6);
    echo "$number 符合";
}
catch(Exception $e){
    echo "message:".$e->getMessage();
}

class exception1 extends Exception{
    public function errMessage(){
        $errorMsg = "wrong line number".$this->getLine().'in'.$this->getFile().':<b>'.$this->getMessage().'</b>invalid email';
        return $errorMsg;
    }
}
$email = "abcd@gmail.com";
try{
    if(filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE){
        throw new exception1($email);
    }
    if(strpos($email, "gmail") !== FALSE)
    {
        throw new Exception("$email 是gmail邮箱");
    }
}
catch(exception1 $e){
    echo $e->errMessage();
}
catch(Exception $e)
{
    echo $e->getMessage();
}


?>