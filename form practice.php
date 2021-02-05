<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>student</title>
        <style>.error{color:#FF0000;}</style>
    </head>
    <body>
        <?php
        $nameErr = $emailErr = $genderErr = $numberErr = "";
        $name = $email = $gender = $comment = $number = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                $nameErr = "name is needed";
            }else{
                $name = test_input($_POST["name"]);
                if(!preg_match("/^[a-zA-Z]*$/",$name)){
                    $nameErr = "only alphabet and space";
                }
            }
            if(empty($_POST['email'])){
                $emailErr = "email is needed";
            }else{
                $email = test_input($_POST["email"]);
                if(!preg_match("/([\w\-]+\@[\w-]+\.[\w\-]+)/",$email)){
                    $emailErr = "email is not legitimate ";
                }
            }
            if(empty($_POST["number"])){
                $number= "";
            }else{
                $number = test_input($_POST["number"]);
            }
            if(empty($_POST["comment"])){
                $comment = "";
            }else{
                $comment = test_input($_POST["comment"]);
            }
            if(empty($_POST["gender"])){
                $genderErr = "gender is needed";
            }else{
                $gender = test_input($_POST["gender"]);
            }
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>


        <h1>学生</h1>
        <p class ="error">*needed</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            name:<input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">*<?php echo $nameErr;?></span>
            <br>
            email:<input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">*<?php echo $emailErr;?></span>
            <br>
            number:<input type="text" name="number" value="<?php echo $number;?>">
            <br>
            comment:<textarea name="comment" rows="5" cols="30"><?php echo $comment;?></textarea>
            <br>
            gender:<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female" >female
            <input type="radio" name="gender" <?php if(isset($gender) && $gender == "male") echo "checked";?> value="male">male
            <span class="error">* <?php echo $genderErr;?></span>
            <br>
            <input type="submit" name="submit" value="Submit"> 
        </form>
        <?php
            echo "<h2>您输入的内容是:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $number;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
        ?>
    </body>

</html>