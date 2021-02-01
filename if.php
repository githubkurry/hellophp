<?php
    $t=10; 
    if ($t<"20" and $t > '5'){//if
        echo "Have a good day!";
    }elseif($t > "20" and $t < "24"){
        echo "Have a good night!";
    }else{
        echo "please go to sleep";
    }
    echo "<br>";


    switch($t){//switch
        case "5":
            echo "Have a good day!";
        break;
        case "10":
            echo "Have a good night!";
        break;
        case "23":
            echo "please go to sleep";
        break;
        default:
            echo "hello";
    }
?>