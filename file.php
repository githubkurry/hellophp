<html>
    <body>
        <?php
        $file = fopen("welcome.txt","r") or exit("unable to open file");
        while(!feof($file)){
            echo fgets($file)."<br>";
        }
        fclose($file);
        ?>
    </body>
</html>