<?php
//mysqli
$servername = "localhost";
$username = "db1";
$password = "123456";

$conn = new mysqli($servername,$username,$password);
if($conn > connect_error){
    die("fail to connect".$conn->connect_error);
}

$sql = "CREATE DATABASE db1";
if($conn->query($sql) === TRUE){
    echo "success to create db1";
}else{
    echo "error:".$conn_error;
}

$conn->close();

//pdo
$servername = "localhost";
$username = "db2";
$password = "123456";

try{
    $conn = new PDO("mysql:host= $servername",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "creat database pdo";
    $conn->exec($sql);
    echo "success<br>";
}
catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();
}
$conn = null;


//create db
$servername = "localhost";
$username = "db3";
$password = "123456";
$dbname = "db3";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("failed".$conn->connect_error);
}
$sql = "CREATE TABLE MyGuests{
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP)";
    if($conn->query($sql) === TRUE){
        echo "success create table";
    }else{
        echo "error".$conn->error;
    }
    $conn->close();



//insert
$servername = "localhost";
$username = "db4";
$password = "123456";
$dbname = "db4";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("failed:".$conn->connect_error);
}
$sql = "INSERT INTO MyGuest(firstname, lastname, email)
VALUE('John','Doe','john@gmail.com')";

if($conn->query($sql) === TRUE){
    echo "success";
}else{
    echo "error".$sql."<br>".$conn->error;
}
$conn->close();


//insert multi
$servername = "localhost";
$username = "db4";
$password = "123456";
$dbname = "db4";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("failed".$conn->connect_error);
}
$sql = "INSERT INTO MyGuest(firstname, lastname, email)
VALUES('john','doe','john@gmail.com');";
$sql = "INSERT INTO MyGuest(firstname, lastname, email)
VALUES('mary','moe','mary@gmail.com');";
$sql = "INSERT INTO MyGuest(firstname, lastname, email)
Values('julie','dooley',‘dooley@gmail.com');";

if($conn->multi_query($sql) === TRUE){
    echo "success";
}else{
    echo "error:".$sql."<br>".$conn_error;
}
$conn->close();

//预处理语句 multi
$servername = "localhost";
$username = "db5";
$password = "123456";
$dbname = "db5";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("failed".$conn->connect_error);
}else{
    $sql = "INSERT INTO MyGuests(firstname,lastname,email) VALUES(?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if(mysqli_stmt_prepare($stmt,$sql)){
        mysqli_stmt_bind_param($stmt,'sss',$firstname,$lastname,$email);

        $fiestname = 'john';
        $lastname = 'doe';
        $email = 'john@gmail.com';
        mysqli_stmt_execute($stmt);

        $firstname = 'mary';
        $lastname = 'moe';
        $email = 'mary@gmail.com';
        mysqli_stmt_execute($stmt);

        $firstname = 'julie';
        $lastname = 'dooley';
        $email = 'julie@gmail.com';
        mysqli_stmt_execute($stmt);
    }
}

//读取数据
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "id:".$row["id"]."-Name:".$row["firstname"]." ".$row["lastname"]."<br>";
    }
}else{
    echo "0 result";
}
$conn->close();


//where
$con = mysqli_connect("localhost","username","password","dbname");
if(mysqli_connect_errno()){
    echo "failed".mysqli_connect_errno();
}
$result = mysqli_query($con,"SELECT * FROM db4 WHERE FirstName = 'john'");
while($row = mysqli_fetch_array($result)){
    echo $row['FirstName']." ".$row['LastName'];
    echo "<br>";
}

//order by
$con = mysqli_connect("localhost","username","password","dbname");
if(mysqli_connect_errno()){
    echo "failed".mysqli_connect_errno();
}
$result = mysqli_query($con,"SELECT * FROM db4 ORDER BY firstname");
while($row = mysqli_fetch_array($result)){
    echo $row['firstname'];
    echo " ".$row['lastname'];
    echo " ".$row['email'];
    echo "<br>";
}
mysqli_close($con);

//2 order by
//SELECT * FROM db4 ORDER BY firstname,lastname;


//update
$con = mysqli_connect("localhost","username","password","dbname");
if(mysqli_connect_errno()){
    echo "failed".mysqli_connect_errno();
}
mysqli_query($con,"UPDATE db4 SET email='john123@gmail.com' WHERE firstname='john' AND lastname='doe'");
mysqli_close($con);



//delete
$con = mysqli_connect($localhost,$username,$password,$dbname);
if(mysqli_connect_errno()){
    echo "failed".mysqli_connect_errno();
}
mysqli_query($con,"DELETE FROM db4 WHERE first='john'");
mysqli_close($con);
?>